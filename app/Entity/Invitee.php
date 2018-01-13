<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Invitee
 */
class Invitee extends Model
{
    /**
     * @return BelongsTo|Gift
     */
    public function eventPermission()
    {
        return $this->belongsTo(EventPermission::class);
    }
}