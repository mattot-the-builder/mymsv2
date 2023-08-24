<?php

namespace App\Exports;

use App\Models\Staff;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClaimExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Staff::all();
    }
}
