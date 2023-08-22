<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MileageClaim extends Model {
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'trip_date',
        'trip_name',
        'starting_location',
        'destination',
        'mileage',
        'fuel_cost',
        'attachment',
    ];

    public function staff() {
        return $this->belongsTo(Staff::class);
    }
}
