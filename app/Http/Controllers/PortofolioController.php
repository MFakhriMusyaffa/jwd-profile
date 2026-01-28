<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('portofolios.index', compact('portofolios'));
    }
}
