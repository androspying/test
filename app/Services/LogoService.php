<?php

namespace App\Services;

use App\Facades\IconStore;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LogoService
{
    /**
     * @var \Illuminate\Support\Collection<string, string>
     */
    protected $tfas;

    /**
     * @var string
     */
    const TFA_JSON = 'tfa.json';

    /**
     * @var string
     */
    const TFA_URL = 'https://2fa.directory/api/v3/tfa.json';

    /**
     * @var string
     */
    const TFA_IMG_URL = 'https://raw.githubusercontent.com/2factorauth/twofactorauth/master/img/';

    public function __construct()
    {
        $this->setTfaCollection();
    }

    /**
     * Fetch a logo for the given service and save it as an icon
     *
     * @param  string|null  $serviceName  Name of the service to fetch a logo for
     * @return string|null The icon filename or null if no logo has been found
     */
    public function getIcon(?string $serviceName)
    {
        $logoFilename = $this->getLogo(strval($serviceName));

        if ($logoFilename) {
            // $iconFilename = IconService::getRandomName('svg');
            $iconFilename = \Illuminate\Support\Str::random(40) . '.svg';

            return $this->copyToIconStore($logoFilename, $iconFilename) ? $iconFilename : null;
        } else {
            return null;
        }
    }

    /**
     * Return the logo's filename for a given service
     *
     * @param  string  $serviceName  Name of the service to fetch a logo for
     * @return string|null The logo filename or null if no logo has been found
     */
    protected function getLogo(string $serviceName)
    {
        $domain       = $this->tfas->get($this->cleanDomain(strval($serviceName)));
        $logoFilename = $domain . '.svg';

        if ($domain && ! Storage::disk('logos')->exists($logoFilename)) {
            $this->fetchLogo($logoFilename);
        }

        return Storage::disk('logos')->exists($logoFilename) ? $logoFilename : null;
    }

    /**
     * Build and set the TFA directoy collection
     */
    protected function setTfaCollection() : void
    {
        // We fetch a fresh tfaDirectory if necessary to prevent too many API calls
        if (Storage::disk('logos')->exists(self::TFA_JSON)) {
            if (time() - Storage::disk('logos')->lastModified(self::TFA_JSON) > 86400) {
                $this->cacheTfaDirectorySource();
            }
        } else {
            $this->cacheTfaDirectorySource();
        }

        $this->tfas = Storage::disk('logos')->exists(self::TFA_JSON)
            ? new Collection(json_decode(Storage::disk('logos')->get(self::TFA_JSON)))
            : collect([]);
    }

    /**
     * Fetch and cache fresh TFA.Directory data using the https://2fa.directory API
     */
    protected function cacheTfaDirectorySource() : void
    {
        try {
            $response = Http::withOptions([
                'proxy' => config('2fauth.config.outgoingProxy'),
            ])->retry(3, 100)->get(self::TFA_URL);

            $coll = collect(json_decode(htmlspecialchars_decode($response->body()), true)) /* @phpstan-ignore-line */
                ->mapWithKeys(function ($item, $key) {
                    return [
                        strtolower(head($item)) => $item[1]['domain'],
                    ];
                });

            Storage::disk('logos')->put(self::TFA_JSON, $coll->toJson())
                ? Log::info('Fresh tfa.json saved to logos dir')
                : Log::notice('Cannot save tfa.json to logos dir');
        } catch (\Exception $e) {
            Log::error('Caching of tfa.json failed:' . $e->getMessage());
        }
    }

    /**
     * Fetch and cache a logo from 2fa.Directory repository
     *
     * @param  string  $logoFile  Logo filename to fetch
     */
    protected function fetchLogo(string $logoFile) : void
    {
        try {
            $response = Http::withOptions([
                'proxy' => config('2fauth.config.outgoingProxy'),
            ])->retry(3, 100)->get(self::TFA_IMG_URL . $logoFile[0] . '/' . $logoFile);

            if ($response->successful()) {
                Storage::disk('logos')->put($logoFile, $response->body())
                    ? Log::info(sprintf('Logo "%s" saved to logos dir.', $logoFile))
                    : Log::notice(sprintf('Cannot save logo "%s" to logos dir', $logoFile));
            }
        } catch (\Exception $exception) {
            Log::error(sprintf('Fetching of logo "%s" failed.', $logoFile));
        }
    }

    /**
     * Prepare and make some replacement to optimize logo fetching
     *
     * @return string Optimized domain name
     */
    protected function cleanDomain(string $domain) : string
    {
        return strtolower(str_replace(['+'], ['plus'], $domain));
    }

    /**
     * Copy a logo file to the icons store with a new name
     *
     * @param  string  $logoFilename
     * @param  string  $iconFilename
     * @return bool Whether the copy succeed or not
     */
    protected function copyToIconStore($logoFilename, $iconFilename) : bool
    {
        if ($content = Storage::disk('logos')->get($logoFilename)) {
            return IconStore::store($iconFilename, $content);
        }

        return false;
    }
}
