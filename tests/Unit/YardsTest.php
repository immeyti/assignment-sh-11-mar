<?php

namespace Tests\Unit;

use App\Services\Distance\Yards;
use Tests\TestCase;

class YardsTest extends TestCase
{
    public function testToMeters()
    {
        $dataProvider = [
            [
                'value' => 3,
                'expected' => 2.7432
            ],
            [
                'value' => 25.3,
                'expected' => 23.13432
            ],
        ];

        foreach($dataProvider as $data) {
            $obj = new Yards($data['value']);
            $valueToMeters = $obj->toMeters();

            $this->assertEquals($data['expected'], $valueToMeters);
        }
    }

    public function testFromMeters()
    {
        $dataProvider = [
            [
                'value' => 67.5,
                'expected' => 73.818897637795276
            ],
            [
                'value' => 14,
                'expected' => 15.310586176727909
            ],
        ];

        foreach($dataProvider as $data) {
            $obj = new Yards($data['value']);
            $valueToMeters = $obj->fromMeters();

            $this->assertEquals($data['expected'], $valueToMeters);
        }
    }
}
