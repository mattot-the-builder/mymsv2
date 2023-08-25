<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ExpenseClaim extends Model {
    use HasFactory;
    use Sortable;

    public $sortable = ['id', 'staff_id', 'total_claim', 'status'];

    public function staff() {
        return $this->belongsTo(Staff::class);
    }

    public function items() {
        return $this->hasMany(ExpenseItem::class);
    }
}
