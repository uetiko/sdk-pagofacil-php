<?php

declare(strict_types=1);

namespace PagoFacil\Sdk\Shared\Infrastructure\ValueObject\Abstracts;

use PagoFacil\Sdk\Shared\Infrastructure\ValueObject\Interfaces\Uuid as UuidInterface;
use Ramsey\Uuid\Uuid;

class AbstractUUid implements UuidInterface
{
    /** @var string $value */
    private $value;

    /**
     * @inheritDoc
     */
    public function getValue(): string
    {
        return $this->toString();
    }

    /**
     * @inheritDoc
     */
    public function isValid(string $value): void
    {
        if (!Uuid::isValid($value)) {
        }
    }

    /**
     * @inheritDoc
     */
    public function random(): UuidInterface
    {
        // TODO: Implement random() method.
    }

    /**
     * @inheritDoc
     */
    public function toString(): string
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function uuidGenerator(): string
    {
        return Uuid::uuid4()->toString();
    }
}