<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleHighlights extends Model
{
    use HasFactory;

    protected $fillable = ['vehicle_id', 'key', 'value'];

    public function vehicle()
    {
    	return $this->belongsTo('App\Models\Vehicle', 'id', 'vehicle_id');
    }
}
