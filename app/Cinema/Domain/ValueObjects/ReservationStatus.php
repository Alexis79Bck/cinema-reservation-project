<?php

namespace App\Cinema\Domain\ValueObjects;

/**
 * Enum ReservationStatus
 *
 * Representa el contrato de los estado de la reservacion.
 * Es un Value Object inmutable.
 */
enum ReservationStatus: string
{
    case PENDING = 'pending';
    case CONFIRMED = 'confirmed';
    case EXPIRED = 'expired';
    case CANCELLED = 'cancelled';
}
