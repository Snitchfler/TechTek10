<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return view('search')->with('message', 'No search query provided.');
        }

        $barangs = Barang::where('nama_barang', 'like', '%' . $query . '%')->get();

        return view('search', ['query' => $query, 'barangs' => $barangs]);
    }
}
