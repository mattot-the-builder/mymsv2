<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class LeaveRequest extends Model {
    use HasFactory;
    use Sortable;

    public $sortable = ['id', 'staff_id', 'reasons', 'start_date', 'end_date', 'total_leave', 'status'];

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
