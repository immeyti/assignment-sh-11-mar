<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Distance\DistanceUnitFactory;
use App\Services\Distance\Calculator as DistanceCalculator;

class CalculateController extends Controller {
    public function sum (Request $request) {

        // Validating inputs
        $this->validate($request, [
            'distance1' => 'required|min:1|numeric',
            'distance1_unit' => 'required|string',
            'distance2' => 'required|min:1|numeric',
            'distance2_unit' => 'required|string',
            'outputUnit' => 'required|string'
        ]);

        $distance1 = $request->input('distance1');
        $distance1_unit = $request->input('distance1_unit');
        $distance2 = $request->input('distance2');
        $distance2_unit = $request->input('distance2_unit');
        $outputUnit = $request->input('outputUnit');

        // Create distance unit objects for each input
        $unitObj1 = DistanceUnitFactory::create($distance1_unit, $distance1);
        $unitObj2 = DistanceUnitFactory::create($distance2_unit, $distance2);

        // Calculating
        $totalDistanceMeters = DistanceCalculator::sum($unitObj1, $unitObj2);

        // Convert total distance to desired result unit
        $output = DistanceUnitFactory::create($outputUnit, $totalDistanceMeters);

        return response([
            'total' => round($output->fromMeters(), 2),
            'unit' => $outputUnit
        ]);
    }
}
