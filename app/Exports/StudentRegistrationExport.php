<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\StudentRegistration;

class StudentRegistrationExport implements FromCollection {
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection() {
        return StudentRegistration::all();
    }
}
