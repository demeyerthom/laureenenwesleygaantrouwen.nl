<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gift
 */
class Gift extends Model
{
    /**
     * @return bool
     */
    public function isOpenContribution(): bool
    {
        return $this->amount == 0;
    }

}