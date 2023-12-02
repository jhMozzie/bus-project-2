<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusDriver extends Model
{
    use HasFactory;

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id');
    }
}
