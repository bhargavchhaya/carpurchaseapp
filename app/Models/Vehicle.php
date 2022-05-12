<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'description', 'price', 'fueltype', 'views'];

    public function favourites()
    {
        return $this->hasMany('App\Models\Favourites', 'vehicle_id', 'id');
    }

    public function hasHighlights()
    {
        return $this->hasMany('App\Models\VehicleHighlights', 'id', 'vehicle_id');
    }

    public function testdrives()
    {
        return $this->hasMany('App\Models\TestDrive', 'id', 'vehicle_id');
    }

    public function calculateemi()
    {
        return $this->hasMany('App\Models\CalculateEmi', 'id', 'vehicle_id');
    }
}
