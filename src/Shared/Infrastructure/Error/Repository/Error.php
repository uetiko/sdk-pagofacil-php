<?php

declare(strict_types=1);

namespace PagoFacil\Sdk\Shared\Infrastructure\Error\Repository;

use PagoFacil\Sdk\Shared\Exceptions\AbstractException;
use Throwable;

abstract class Error extends AbstractException
{

    public function __construct(
        string $message,
        string $errorCode,
        string $errorMessage,
        int $code = null,
        Throwable $previous = null)
    {
        $this->setErrorCode($errorCode);
        $this->setErrorMessage($errorMessage);
        parent::__construct($message, $code, $previous);
    }
}