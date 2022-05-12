<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use App\Models\VehicleHighlights;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vehicle::truncate();
        // VehicleHighlights::truncate();
        $brands = ['Maruti', 'Honda', 'Mahindra Renault', 'TATA', 'Nissan', 'Maserati', 'Toyoto', 'Fiat', 'Morris Garrison', 'Jeep', 'BMW', 'Mercedes', 'Hyundai', 'Audi'];
        $fueltype = ['Diesel','Electric', 'Hybrid','Gas', 'Petrol'];
        for ($j=0; $j < count($brands); $j++) {
            $brand = $brands[$j];
            for ($i=0; $i < 5; $i++) {
                $model = strtoupper(substr($brand, 0, 3)).($i+1);
                $vehicle = Vehicle::create([
                    'brand' => $brand,
                    'model' => $model,
                    'description' => 'The '.$brand.' '.$model.' is designed to bring out the stylish side of togetherness. The New Age '.$brand.' '.$model.'. Lets You Do that! The New Age  is Smarter than Ever with Connect - Advanced Telematics Solution',
                    'price' => rand(50000, 5000000),
                    'fueltype' => $fueltype[rand(0, 4)],
                    'views' => rand(100,1000)
                ]);
                $highlights = [
                    ['vehicle_id' => $vehicle->id,'key' => 'City Mileage', 'value' => rand(5, 50).'kmpl'],
                    ['vehicle_id' => $vehicle->id,'key' => 'Engine Displacement (cc)', 'value' => rand(700, 2500).'cc'],
                    ['vehicle_id' => $vehicle->id,'key' => 'No. of cylinder', 'value' => rand(3, 8)],
                    ['vehicle_id' => $vehicle->id,'key' => 'Fuel Tank Capacity', 'value' => rand(5, 50).'litres'],
                    ['vehicle_id' => $vehicle->id,'key' => 'Max Power (bhp@rpm)', 'value' => rand(50, 150).'bhp@'.rand(1000,8000).'rpm'],
                    ['vehicle_id' => $vehicle->id,'key' => 'Max Torque (nm@rpm)', 'value' => rand(50, 100).'nm@'.rand(1000,8000).'rpm'],
                    ['vehicle_id' => $vehicle->id,'key' => 'Seating Capacity', 'value' => '5'],
                    ['vehicle_id' => $vehicle->id,'key' => 'Ground Clearance', 'value' => rand(100,200).'cm']
                ];
                foreach ($highlights as $item) {
                    $hl = new VehicleHighlights($item);
                    $vehicle->hasHighlights()->save($hl);
                }
            }
        }
    }
}
