<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model {
    use HasFactory;

    // staff_id	start_date end_date total_leave	reasons	
    protected $fillable = [
        'staff_id',
        'start_date',
        'end_date',
        'total_leave',
        'reasons',
    ];

    public function staff() {
        return $this->belongsTo(Staff::class);
    }
}
