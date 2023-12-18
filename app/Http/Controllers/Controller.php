<?php

namespace App\Http\Controllers;

use App\Imports\KpiScore;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getKpiScore(string $fileName): array
    {
        $file = Storage::path($fileName);
        $data = Excel::toCollection(new KpiScore(), $file)->splice(2, 3);
        $agency = [];

        foreach ($data as $item) {
            $agency[] = $item->get(0)[0];
        }

        return [$agency, $data];
    }
}
