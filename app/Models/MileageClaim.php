<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class MileageClaim extends Model {
    use HasFactory;
    use Sortable;

    public $sortable = ['id', 'staff_id', 'trip_name', 'total_claim', 'status'];


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
