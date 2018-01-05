<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Class Gift
 */
class Gift extends Model
{
    /**
     * @return HasMany|GiftReservation[]|Collection
     */
    public function reservations()
    {
        return $this->hasMany(GiftReservation::class);
    }

    /**
     * @return float
     */
    public function currentAmount(): float
    {
        return $this->amount - $this->reservations->reduce(
                function (float $carry, GiftReservation $item) {
                    return $carry + $item->amount;
                }, 0);
    }

    /**
     * @return bool
     */
    public function isOpenContribution(): bool
    {
        return $this->amount == 0;
    }

}