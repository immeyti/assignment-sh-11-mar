<?php

namespace Tests\Unit;

use App\Services\Distance\DistanceUnitFactory;
use App\Services\Distance\Meters;
use App\Services\Distance\Yards;
use Tests\TestCase;

class DistanceUnitFactoryTest extends TestCase
{
    public function testCreate()
    {
        $dataProvider = [
            [
                'unit' => 'Meters',
                'value' => 1,
                'expected' => Meters::class
            ],
            [
                'unit' => 'Yards',
                'value' => 1,
                'expected' => Yards::class
            ],
        ];

        foreach($dataProvider as $data) {
            $obj = DistanceUnitFactory::create($data['unit'], $data['value']);

            $this->assertInstanceOf($data['expected'], $obj);
        }
    }
}
