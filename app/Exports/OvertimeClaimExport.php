<?php

namespace App\Exports;

use App\Models\OvertimeClaim;
use Maatwebsite\Excel\Concerns\FromCollection;

class OvertimeClaimExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OvertimeClaim::all();
    }
}
