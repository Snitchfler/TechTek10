<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();

        if ($barangs->isEmpty()) {
            $barangs = null;
        }

        return view('dashboard', compact('barangs'));
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $barangs = Barang::where('nama_barang', 'LIKE', '%', $request->search . '%')->get();
        } else {
            Alert::error('Barang Tidak Ditemukan', 'Error');
        }
        return view('dashboard', ['barangs' => $barangs]);
    }
}
