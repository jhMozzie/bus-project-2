<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'brand',
        'insurance',
        'capacity',
        // Agrega aquí otros campos que desees permitir en la asignación masiva
    ];


    public function busDrivers()
    {
        return $this->hasMany(BusDriver::class, 'bus_id');
    }
}
