<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseClaim extends Model {
    use HasFactory;

    public function staff() {
        return $this->belongsTo(Staff::class);
    }

    public function items() {
        return $this->hasMany(ExpenseItem::class);
    }
}
