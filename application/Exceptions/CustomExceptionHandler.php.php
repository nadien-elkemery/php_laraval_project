<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as BaseHandler;

class CustomExceptionHandler extends BaseHandler
{
    /**
     * Define custom log levels for exception types.
     *
     * @var array<class-string<Throwable>, string>
     */
    protected $customLogLevels = [];

    /**
     * Exception types that should not be reported.
     *
     * @var array<class-string<Throwable>>
     */
    protected $ignoredExceptions = [];

    /**
     * Inputs never flashed for validation exceptions.
     *
     * @var array<string>
     */
    protected $sensitiveInputs = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register callbacks for handling exceptions.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $exception) {
            $this->logExceptionDetails($exception);
        });
    }

    /**
     * Log custom exception details.
     *
     * @param Throwable $exception
     */
    protected function logExceptionDetails(Throwable $exception): void
    {
        // You can implement custom logging logic here if needed.
    }

    /**
     * Override to customize which exceptions are not reported.
     *
     * @return array<class-string<Throwable>>
     */
    public function getIgnoredExceptions(): array
    {
        return $this->ignoredExceptions;
    }

    /**
     * Override to customize sensitive inputs.
     *
     * @return array<string>
     */
    public function getSensitiveInputs(): array
    {
        return $this->sensitiveInputs;
    }
}
