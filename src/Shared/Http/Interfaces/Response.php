<?php

declare(strict_types=1);

namespace PagoFacil\Sdk\Shared\Http\Interfaces;

use Throwable;
use Psr\Http\Message\ResponseInterface;

interface Response
{
    /**
     * @throws Throwable
     */
    public function validateAuthorized(): void;

    /**
     * @return array
     */
    public function getBodyToArray(): array;
}