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
                    'distance2' => 32,
                    'distance2_unit' => 'Meters',
                    'outputUnit' => 'Meters'
                ],
                'expected' => [
                    'total' => 34.74,
                    'unit' => 'Meters'
                ]
            ],
            [
                'params' => [
                    'distance1' => 4,
                    'distance1_unit' => 'Yards',
                    'distance2' => 2,
                    'distance2_unit' => 'Meters',
                    'outputUnit' => 'Meters'
                ],
                'expected' => [
                    'total' => 5.66,
                    'unit' => 'Meters'
                ]
            ],
            [
                'params' => [
                    'distance1' => 4,
                    'distance1_unit' => 'Yards',
                    'distance2' => 2,
                    'distance2_unit' => 'Meters',
                    'outputUnit' => 'Yards'
                ],
                'expected' => [
                    'total' => 6.19,
                    'unit' => 'Yards'
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
