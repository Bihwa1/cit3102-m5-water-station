<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaterStation extends Model
{
    protected $fillable = [
        'Customer_id',
        'Customer_name',
        'Water_type',
        'Total_volume_delivered',
        'Payment',
    ];
    //
}
