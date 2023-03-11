<?php

namespace App\Services\Distance;

use Exception;

class DistanceUnitFactory
{
    /**
     * Creates an instance of a distance unit class based on the specified unit
     * type and value.
     *
     * @param string $unit The type of distance unit to create, either "Meters" or "Yards".
     * @param float $value The value of the distance to be represented by the new distance unit object.
     * @return DistanceUnit An instance of a distance unit class.
     * @throws Exception If an invalid unit type is specified.
     */
    public static function create($unit, $value)
    {
        switch ($unit) {
            case 'Meters':
                return new Meters($value);
            case 'Yards':
                return new Yards($value);
            default:
                throw new Exception('Invalid unit specified');
        }
    }
}
