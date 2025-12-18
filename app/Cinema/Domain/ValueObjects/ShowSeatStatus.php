<?php

namespace App\Cinema\Domain\ValueObjects;

/**
 * Enum ShowSeatStatus
 *
 * Representa el contrato de los estado de los asientos de una 
 * funcion determinada.
 * Es un Value Object inmutable.
 */
enum ShowSeatStatus: string
{
    case AVAILABLE = 'available';
    case RESERVED = 'reserved';
    case SOLD = 'sold';
}
