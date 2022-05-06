<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainTrip extends Model
{
    protected $fillable = [
        'TrainProductor',
        'DepartureStation',
        'ArrivalStation',
        'ArrivalTime',
        'DepartureTime',
        'TrainID',
        'CarriagesNumber',
        'Delay',
        'Deleted',
    ];
}
