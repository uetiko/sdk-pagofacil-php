<?php

declare(strict_types=1);

namespace PagoFacil\Sdk\Shared\Exceptions;

use Exception;

abstract class AbstractException extends Exception
{
    /** @var string $exceptionCode */
    private $exceptionCode;
    /** @var string $errorCode */
    private $errorCode;
    /** @var string $errorMessage */
    private $errorMessage;

    /**
     * @return string
     */
    public function getExceptionCode(): string
    {
        return $this->exceptionCode;
    }

    /**
     * @param string $code
     */
    protected function setExceptionCode(string $code): void
    {
        $this->exceptionCode = $code;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    protected function setErrorCode(string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     */
    protected function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

}