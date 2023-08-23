<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseItem extends Model {
    use HasFactory;

    protected $fillable = [
        'expense_claim_id',
        'date',
        'details',
        'amount',
        'receipt',
    ];

    public function expenseClaim() {
        return $this->belongsTo(ExpenseClaim::class);
    }
}
