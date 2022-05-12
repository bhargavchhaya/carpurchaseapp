<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Favourites;
use App\Models\Vehicle;
use App\Models\TestDrive;
use App\Models\CalculateEmi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Favourites::truncate();
        // TestDrive::truncate();
        // CalculateEmi::truncate();
        $vehicleCount = Vehicle::count();
        User::factory()->count(10)->create()->each(function ($user, $vehicleCount) {
            for ($i=1; $i < $vehicleCount; $i++) {
                $veh = Vehicle::find($i);
                if($veh){
                    $fav = new Favourites(['user_id' => $user->id, 'vehicle_id' => $veh->id, 'like' => 1]);
                    $user->favourites()->save($fav);
                    $td = new TestDrive([
                        'user_id' => $user->id,
                        'vehicle_id' => $veh->id,
                        'date' => Carbon::now()->subDays(rand(0, 7))->format('d-m-Y'),
                        'timeslot' => Carbon::now()->subDays(rand(0, 7))->format('H:i A')
                    ]);
                    $user->testdrive()->save($td);
                    $roi = rand(1, 12);
                    $tenure = rand(12, 72);
                    $emi = (($veh->price + ($veh->price * ($roi/100)))/$tenure);
                    $ce = new CalculateEmi([
                        'vehicle_id' => $veh->id,
                        'user_id' => $user->id,
                        'price' => $veh->price,
                        'roi' => $roi,
                        'tenure' => $tenure,
                        'emi' => $emi
                    ]);
                    $user->calculateemi()->save($ce);
                }
            }
        });
    }
}
