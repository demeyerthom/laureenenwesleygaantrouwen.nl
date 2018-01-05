<?php

namespace App\Validation;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class Float
 */
class FloatValue implements Rule
{
    /**
     * @var float
     */
    protected $min;

    /**
     * @var float
     */
    protected $max;

    /**
     * FloatValue constructor.
     *
     * @param float $min
     * @param float $max
     */
    public function __construct(float $min, float $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return (float)$value >= $this->min && (float)$value <= $this->max;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return sprintf('Provided value is not within allowed range of %s and %s', $this->min, $this->max);
    }
}