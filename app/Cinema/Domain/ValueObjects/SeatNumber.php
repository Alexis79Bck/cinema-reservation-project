<?php

namespace App\Cinema\Domain\ValueObjects;

use InvalidArgumentException;


/**
 * Class SeatNumber
 *
 * Representa un asiento dentro de una sala de cine.
 * Es un Value Object inmutable.
 *
 * @property string $row Fila del asiento (ej: "A")
 * @property int $number Número del asiento en la fila
 */
class SeatNumber
{
    private string $row;
    private int $number;

    public function __construct(string $row, int $number)
    {
        if (empty($row)) {
            throw new InvalidArgumentException("Row cannot be empty.");
        }
        if ($number <= 0) {
            throw new InvalidArgumentException("Seat number must be positive.");
        }

        $this->row = strtoupper($row);
        $this->number = $number;
    }

    public function getRow(): string
    {
        return $this->row;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function __toString(): string
    {
        return $this->row . $this->number;
    }
}
