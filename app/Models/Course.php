<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Course extends Model {
    use HasFactory;
    use Sortable;

    public $sortable = ['id', 'name', 'created_at', 'updated_at'];

    protected $fillable = ['name', 'details'];

    public function studentRegistrations() {
        return $this->hasMany(StudentRegistration::class);
    }

    public function payments() {
        return $this->hasManyThrough(Payment::class, StudentRegistration::class);
    }
}
