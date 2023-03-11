<?php

namespace App\Services\Distance;

class Meters extends AbstractDistance
{
    /**
     * Returns value because the value is always in meters
     *
     * @return float The distance value in meters.
     */
    public function toMeters()
    {
        return $this->value;
    }

    /**
     * Returns value because the value is always in meters
     *
     * @return float The distance value in meters.
     */
    public function fromMeters()
    {
        return $this->value;
    }
}
