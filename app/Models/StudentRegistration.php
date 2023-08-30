<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class StudentRegistration extends Model {
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'user_id',
        'contact',
        'course_id',
        'status',
    ];

    public $sortable = ['id', 'user_id', 'created_at', 'updated_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }
}
