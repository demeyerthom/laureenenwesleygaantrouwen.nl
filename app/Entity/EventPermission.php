<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class EventPermission
 */
class EventPermission extends Model
{
    /**
     * @return HasMany
     */
    public function invitees()
    {
        return $this->hasMany(Invitee::class);
    }
}
