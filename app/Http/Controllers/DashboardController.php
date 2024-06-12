<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');

    }

    public function count()
    {
        $totalBarang = Barang::count();
        return view('dashboard', compact('totalBarang'));
    }
}
