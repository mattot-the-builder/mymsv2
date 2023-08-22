<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model {
    use HasFactory;

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
