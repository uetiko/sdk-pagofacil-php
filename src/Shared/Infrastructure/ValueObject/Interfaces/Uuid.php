<?php

declare(strict_types=1);

namespace PagoFacil\Sdk\Shared\Infrastructure\ValueObject\Interfaces;

interface Uuid
{
    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string $value
     */
    public function isValid(string $value): void;

    /**
     * @return $this
     */
    public function random(): self;

    /**
     * @return string
     */
    public function toString(): string;

    /**
     * @return string
     */
    public function uuidGenerator(): string;
}