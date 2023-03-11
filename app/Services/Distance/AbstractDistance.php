<?php

namespace App\Services\Distance;

abstract class AbstractDistance implements DistanceUnit {
    protected $value;

    public function __construct($value) {
      $this->value = $value;
    }
}
