<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class KpiScore implements ToCollection
{
    public function collection(Collection $collection)
    {
        //
    }
}
