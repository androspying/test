<?php

namespace Tests\Unit\Exceptions;

use App\Exceptions\DbEncryptionException;
use App\Exceptions\EncryptedMigrationException;
use App\Exceptions\FailedIconStoreDatabaseTogglingException;
use App\Exceptions\Handler;
use App\Exceptions\InvalidMigrationDataException;
use App\Exceptions\InvalidOtpParameterException;
use App\Exceptions\InvalidQrCodeException;
use App\Exceptions\InvalidSecretException;
use App\Exceptions\UndecipherableException;
use App\Exceptions\UnsupportedMigrationException;
use App\Exceptions\UnsupportedOtpTypeException;
use Illuminate\Contracts\Container\Container;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * HandlerTest test class
 */
#[CoversClass(Handler::class)]
class HandlerTest extends TestCase
{
    #[Test]
    #[DataProvider('provideExceptionsforBadRequest')]
    public function test_exceptions_returns_badRequest_json_response($exception)
    {
        $instance = new Handler($this->createMock(Container::class));
        $class    = new \ReflectionClass(Handler::class);

        $method = $class->getMethod('render');
        $method->setAccessible(true);

        $response = $method->invokeArgs($instance, [new Request, $this->createMock($exception)]);

        $this->assertInstanceOf(JsonResponse::class, $response);

        $response = \Illuminate\Testing\TestResponse::fromBaseResponse($response);
        $response->assertStatus(400)
            ->assertJsonStructure([
                'message',
            ]);
    }

    /**
     * Provide Valid data for validation test
     */
    public static function provideExceptionsforBadRequest() : array
    {
        return [
            [
                DbEncryptionException::class,
            ],
            [
                EncryptedMigrationException::class,
            ],
            [
                FailedIconStoreDatabaseTogglingException::class,
            ],
            [
                InvalidMigrationDataException::class,
            ],
            [
                InvalidOtpParameterException::class,
            ],
            [
                InvalidQrCodeException::class,
            ],
            [
                InvalidSecretException::class,
            ],
            [
                UndecipherableException::class,
            ],
            [
                UnsupportedMigrationException::class,
            ],
            [
                UnsupportedOtpTypeException::class,
            ],
        ];
    }

    #[Test]
    #[DataProvider('provideExceptionsforNotFound')]
    public function test_exceptions_returns_notFound_json_response($exception)
    {
        $instance = new Handler($this->createMock(Container::class));
        $class    = new \ReflectionClass(Handler::class);

        $method = $class->getMethod('render');
        $method->setAccessible(true);

        $response = $method->invokeArgs($instance, [new Request, $this->createMock($exception)]);

        $this->assertInstanceOf(JsonResponse::class, $response);

        $response = \Illuminate\Testing\TestResponse::fromBaseResponse($response);
        $response->assertStatus(404)
            ->assertJsonStructure([
                'message',
            ]);
    }

    /**
     * Provide Valid data for validation test
     */
    public static function provideExceptionsforNotFound() : array
    {
        return [
            [
                '\Illuminate\Database\Eloquent\ModelNotFoundException',
            ],
            [
                '\Symfony\Component\HttpKernel\Exception\NotFoundHttpException',
            ],
        ];
    }

    #[Test]
    public function test_authenticationException_returns_unauthorized_json_response()
    {
        $instance = new Handler($this->createMock(Container::class));
        $class    = new \ReflectionClass(Handler::class);

        $method = $class->getMethod('render');
        $method->setAccessible(true);

        $mockException = $this->createMock(\Illuminate\Auth\AuthenticationException::class);
        $mockException->method('guards')->willReturn(['web-guard']);

        $response = $method->invokeArgs($instance, [new Request, $mockException]);

        $this->assertInstanceOf(JsonResponse::class, $response);

        $response = \Illuminate\Testing\TestResponse::fromBaseResponse($response);
        $response->assertStatus(401)
            ->assertJsonStructure([
                'message',
            ]);
    }

    #[Test]
    public function test_authenticationException_returns_proxyAuthRequired_json_response_with_proxy_guard()
    {
        $instance = new Handler($this->createMock(Container::class));
        $class    = new \ReflectionClass(Handler::class);

        $method = $class->getMethod('render');
        $method->setAccessible(true);

        $mockException = $this->createMock(\Illuminate\Auth\AuthenticationException::class);
        $mockException->method('guards')->willReturn(['reverse-proxy-guard']);

        $response = $method->invokeArgs($instance, [new Request, $mockException]);

        $this->assertInstanceOf(JsonResponse::class, $response);

        $response = \Illuminate\Testing\TestResponse::fromBaseResponse($response);
        $response->assertStatus(407)
            ->assertJsonStructure([
                'message',
            ]);
    }

    #[Test]
    public function test_AccessDeniedException_returns_forbidden_json_response()
    {
        $instance = new Handler($this->createMock(Container::class));
        $class    = new \ReflectionClass(Handler::class);

        $method = $class->getMethod('render');
        $method->setAccessible(true);

        $mockException = $this->createMock(\Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException::class);

        $response = $method->invokeArgs($instance, [new Request, $mockException]);

        $this->assertInstanceOf(JsonResponse::class, $response);

        $response = \Illuminate\Testing\TestResponse::fromBaseResponse($response);
        $response->assertStatus(403)
            ->assertJsonStructure([
                'message',
            ]);
    }
}
