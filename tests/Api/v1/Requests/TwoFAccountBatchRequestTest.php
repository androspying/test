<?php

namespace Tests\Api\v1\Requests;

use App\Api\v1\Requests\TwoFAccountBatchRequest;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use Tests\Api\v1\Requests\DataProviders\TwoFAccountDataProvider;
use Tests\TestCase;

/**
 * TwoFAccountBatchRequestTest test class
 */
#[CoversClass(TwoFAccountBatchRequest::class)]
class TwoFAccountBatchRequestTest extends TestCase
{
    use WithoutMiddleware;

    #[Test]
    public function test_user_is_authorized()
    {
        Auth::shouldReceive('check')
            ->once()
            ->andReturn(true);

        $request = new TwoFAccountBatchRequest;

        $this->assertTrue($request->authorize());
    }

    #[Test]
    #[DataProviderExternal(TwoFAccountDataProvider::class, 'validIdsProvider')]
    public function test_valid_data(array $data) : void
    {
        $request   = new TwoFAccountBatchRequest;
        $validator = Validator::make($data, $request->rules());

        $this->assertFalse($validator->fails());
    }

    #[Test]
    #[DataProviderExternal(TwoFAccountDataProvider::class, 'invalidIdsProvider')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new TwoFAccountBatchRequest;
        $validator = Validator::make($data, $request->rules());

        $this->assertTrue($validator->fails());
    }
}
