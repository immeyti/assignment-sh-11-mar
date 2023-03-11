<?php

namespace Tests\Feature;

use Tests\TestCase;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CalculatingSumDistancesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShouldCalculateTotalDistanceInUserSpecifiedUnit()
    {
        $dataProvider = [
            [
                'params' => [
                    'distance1' => 3,
                    'distance1_unit' => 'Yards',
                    'distance1' => 32,
                    'distance1_unit' => 'Meters',
                    'outputUnit' => 'Meters'
                ],
                'expected' => [
                    'total' => 34.7432,
                    'unit' => 'Meters'
                ]
            ]
        ];

        foreach($dataProvider as $data) {
            $url = http_build_query($data['params']);

            $this->get("/api/calculate?$url")
            ->seeJson($data['expected']);
        }
    }
}
