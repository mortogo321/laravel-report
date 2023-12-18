<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $fileName = 'data/data.xlsx';

        if (!Storage::exists($fileName)) {
            abort(404);
        }

        [$agency, $data] = $this->getKpiScore($fileName);

        return view('home', compact('agency', 'data'));
    }
}
