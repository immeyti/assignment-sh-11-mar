<?php

namespace App\Services\Distance;

interface DistanceUnit
{
    /**
     * Converts the distance value to meters.
     *
     * @return float The distance value in meters.
     */
    public function toMeters();

    /**
     * Converts a distance value in meters to the current distance unit.
     *
     * @return float The distance value in the current distance unit.
     */
    public function fromMeters();
}
