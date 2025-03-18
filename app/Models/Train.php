<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = ['company', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'train_code', 'number_of_carriages', 'in_time', 'cancelled'];
}
