<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Course extends Model
{
    use HasFactory;
    use Sortable;

    public $sortable = ['id', 'name', 'date', 'updated_at'];

    protected $fillable = ['name', 'contents', 'started_at', 'ended_at', 'fee'];

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function payments()
    {
        return $this->hasManyThrough(Payment::class, StudentRegistration::class);
    }

}
