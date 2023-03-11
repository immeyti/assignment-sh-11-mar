<?php

namespace Tests\Unit;

use App\Services\Distance\Meters;
use Tests\TestCase;

class MetersTest extends TestCase
{
    public function testToMeters()
    {
        $dataProvider = [
            [
                'value' => 4,
                'expected' => 4
            ],
            [
                'value' => 30.76,
                'expected' => 30.76
            ],
        ];

        foreach($dataProvider as $data) {
            $obj = new Meters($data['value']);
            $valueToMeters = $obj->toMeters();

            $this->assertEquals($data['expected'], $valueToMeters);
        }
    }

    public function testFromMeters()
    {
        $dataProvider = [
            [
                'value' => 45.5,
                'expected' => 45.5
            ],
            [
                'value' => 14,
                'expected' => 14
            ],
        ];

        foreach($dataProvider as $data) {
            $obj = new Meters($data['value']);
            $valueToMeters = $obj->fromMeters();

            $this->assertEquals($data['expected'], $valueToMeters);
        }
    }
}
