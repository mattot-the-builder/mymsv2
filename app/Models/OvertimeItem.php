<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OvertimeItem extends Model {
    use HasFactory;

    protected $fillable = [
        'overtime_claim',
        'date',
        'details',
        'start_time',
        'end_time',
        'total_hour',
    ];

    public function overtimeClaim() {
        return $this->belongsTo(OvertimeClaim::class);
    }
}
