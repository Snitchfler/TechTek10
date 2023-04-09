<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class HomeController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();

        if ($barangs->isEmpty()) {
            $barangs = null;
        }

        return view('dashboard', compact('barangs'));
    }
}
