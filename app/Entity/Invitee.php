<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Invitee extends Model
{
    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
