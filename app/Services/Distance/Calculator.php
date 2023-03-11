<?php

namespace App\Services\Distance;

class Calculator {

    /**
     * Calculates the sum of two distances.
     *
     * @param DistanceUnit $distance1 The first distance to add.
     * @param DistanceUnit $distance2 The second distance to add.
     * @return float The sum of the two distances in meters.
     */
    public static function sum (DistanceUnit $distance1, DistanceUnit $distance2) {
        // Convert input distances to meters
        $distance1Meters = $distance1->toMeters();
        $distance2Meters = $distance2->toMeters();

        // Calculate total distance in meters
        return $distance1Meters + $distance2Meters;
    }
}
