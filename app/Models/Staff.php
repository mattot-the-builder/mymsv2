<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model {
    use HasFactory;

    // staff status

    // <x-form-date label="Start Date Working" name="start_date_working" />
    // <x-form-text label="IC Number" name="ic_number" />
    // <x-form-number label="Age" name="age" />

    //gender

    // <x-form-text label="Contact" name="contact" />

    // <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    //     <th scope="row"
    //         class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
    //         Address
    //     </th>

    //     <td class="px-6 py-4">
    //         <textarea name="address" rows="4"
    //             class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    //             placeholder="Address"></textarea>
    //     </td>
    // </tr>

    // <x-form-date label="Date of Birth" name="dob" />
    // <x-form-text label="Place of Birth" name="pob" />
    // <x-form-text label="Position" name="position" />
    // <x-form-text label="Marital Status" name="marital_status" />
    // <x-form-text label="Spouse Name" name="spouse_name" />
    // <x-form-text label="Spouse Contact" name="spouse_contact" />
    // <x-form-text label="Spouse Position" name="spouse_position" />
    // <x-form-text label="Spouse Company" name="spouse_company" />
    // <x-form-text label="Emergency Contact" name="emergency_contact" />
    // <x-form-text label="Emergency Contact Relationship" name="emergency_contact_relationship" />
    // <x-form-text label="Education" name="education" />
    // <x-form-text label="Vehicle Registration" name="vehicle_registration" />
    // <x-form-text label="Vehicle Type" name="vehicle_type" />
    // <x-form-text label="Vehicle Model" name="vehicle_model" />

    // front_ic

    // back_ic

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
