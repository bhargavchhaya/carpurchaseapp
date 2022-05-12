<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculateEmi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vehicle_id',
        'price',
        'roi',
        'tenure',
        'emi'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'user_id');
    }

    public function vehicle()
    {
    	return $this->belongsTo('App\Models\Vehicle', 'id', 'vehicle_id');
    }
}
