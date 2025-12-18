<?php

namespace App\Cinema\Domain\ValueObjects;

use InvalidArgumentException;

/**
 * Class Money
 *
 * Representa la moneda o dinero.
 * Es un Value Object inmutable.
 *
 * @property float $amount Cantidad de asientos
 * @property string $currency Moneda Fiat
 */

class Money
{
    private float $amount;
    private string $currency;

    public function __construct(float $amount, string $currency = 'USD')
    {
        if ($amount < 0) {
            throw new InvalidArgumentException("Amount cannot be negative.");
        }
        $this->amount = $amount;
        $this->currency = strtoupper($currency);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function add(Money $other): Money
    {
        if ($this->currency !== $other->currency) {
            throw new InvalidArgumentException("Cannot add Money with different currencies.");
        }

        return new Money($this->amount + $other->amount, $this->currency);
    }
}
