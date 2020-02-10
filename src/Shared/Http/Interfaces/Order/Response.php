<?php

declare(strict_types=1);

namespace PagoFacil\Sdk\Shared\Http\Interfaces\Order;

interface Response
{
    /**
     * @return Charge
     */
    public function getTransaction(): Charge;
}