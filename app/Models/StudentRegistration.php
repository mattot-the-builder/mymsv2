<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class StudentRegistration extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'user_id',
        'name',
        'ic_number',
        'contact',
        'company_name',
        'address',
        'is_sponsored',
        'competency',
        'position',
        'course_id',
        'status',
    ];

    public $sortable = ['id', 'name', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
