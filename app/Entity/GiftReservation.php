<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class GiftReservation
 */
class GiftReservation extends Model
{
    /**
     * @return BelongsTo|Gift
     */
    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }
}