<?php

declare(strict_types=1);

namespace PagoFacil\Sdk\Shared\Infrastructure\Interfaces\Error;

interface Error
{
    /**
     * @return string
     */
    public function getExceptionCode(): string;

    /**
     * @return string
     */
    public function getErrorCode(): string;

    /**
     * @return string
     */
    public function getErrorMessage(): string;
}