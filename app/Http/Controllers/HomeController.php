<?php

namespace App\Http\Controllers;

use App\Imports\KpiScore;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index(): View
    {
        $fileName = 'data/data.xlsx';

        if (!Storage::exists($fileName)) {
            abort(404);
        }

        $file = Storage::path($fileName);
        $data = Excel::toCollection(new KpiScore(), $file)->splice(2, 3);
        $agency = [];

        foreach ($data as $item) {
            $agency[] = $item->get(0)[0];
        }


        return view('home', compact('agency', 'data'));
    }
}
