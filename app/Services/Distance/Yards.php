<?php

namespace App\Services\Distance;

class Yards extends AbstractDistance
{
    /**
     * Converts the distance value from yards to meters.
     *
     * @return float The distance value in meters.
     */
    public function toMeters()
    {
        return $this->value * 0.9144;
    }

    /**
     * Converts the distance value from meters to yards.
     *
     * @return float The distance value in yards.
     */
    public function fromMeters()
    {
        return $this->value / 0.9144;
    }
}
