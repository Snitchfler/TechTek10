<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use App\User;
use App\Models\PesananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::user()->id;

        $pesanans = Pesanan::with('PesananDetails.barang')
            ->where('user_id', $user_id)
            ->where('status', '!=', 0)
            ->get(['id', 'kode', 'created_at', 'status']);

        return view('history.index', compact('pesanans'));
    }

    public function detail($id)
    {
        $user_id = Auth::user()->id;
        $pesanan = Pesanan::find($id);
        $pesanan_details = PesananDetail::with('barang')->where('pesanan_id', $id)->get();

        return view('history.detail', compact('pesanan', 'pesanan_details'));
    }
}
