<?php

namespace App\Exports;

use App\Models\ExpenseClaim;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExpenseClaimExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExpenseClaim::all();
    }
}
