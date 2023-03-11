<?php

namespace App\Services\Distance;

interface DistanceUnit
{
    public function toMeters();
    public function fromMeters();
}
