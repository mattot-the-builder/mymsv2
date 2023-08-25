<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Staff extends Model {
    use HasFactory;
    use Sortable;

    public $sortable = ['id', 'user_id', 'staff_status', 'status'];

    protected $fillable = [
        'staff_status',
        'start_date_working',
        'ic_number',
        'age',
        'gender',
        'contact',
        'address',
        'dob',
        'pob',
        'position',
        'marital_status',
        'spouse_name',
        'spouse_contact',
        'spouse_position',
        'spouse_company',
        'emergency_contact',
        'emergency_contact_relationship',
        'education',
        'vehicle_registration',
        'vehicle_type',
        'vehicle_model',
        'front_ic',
        'back_ic',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function expenseClaims() {
        return $this->hasMany(ExpenseClaim::class);
    }

    public function mileageClaims() {
        return $this->hasMany(MileageClaim::class);
    }

    public function overtimeClaims() {
        return $this->hasMany(OvertimeClaim::class);
    }

    public function leaveRequests() {
        return $this->hasMany(LeaveRequest::class);
    }
}
