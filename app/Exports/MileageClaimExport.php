<?php

namespace App\Exports;

use App\Models\MileageClaim;
use Maatwebsite\Excel\Concerns\FromCollection;

class MileageClaimExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MileageClaim::all();
    }
}
