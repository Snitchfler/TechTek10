<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\PesananDetail;
use App\Models\Pesanan;
class BarangController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'gambar' => 'required|image|max:2048',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'keterangan' => 'required',
        ]);

        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        $barang = new Barang();
        $barang->nama_barang = $validatedData['nama_barang'];
        $barang->gambar = $imageName;
        $barang->harga = $validatedData['harga'];
        $barang->stok = $validatedData['stok'];
        $barang->keterangan = $validatedData['keterangan'];
        $barang->save();

        return redirect('/dashboard')->with('success', 'Barang berhasil ditambahkan.');
    }
    public function stores(Request $request)
    {
        // Simpan pesanan
        $pesanan = new Pesanan();
        $pesanan->user_id = auth()->user()->id;
        $pesanan->total_harga = $request->harga;
        $pesanan->save();

        // Simpan detail pesanan
        $pesanan_detail = new PesananDetail();
        $pesanan_detail->user_id = auth()->user()->id;
        $pesanan_detail->pesanan_id = $pesanan->id;
        $pesanan_detail->jumlah = 1;
        $pesanan_detail->jumlah_barang = $request->stok;
        $pesanan_detail->save();

        // Kurangi stok barang yang dipesan
        $barang = Barang::find($request->id);
        $barang->stok = $barang->stok - $request->stok;
        $barang->save();

        return redirect('/')->with('sukses', 'Pesanan Anda berhasil diproses.');
    }
    public function pesan($id)
    {
        $barang = Barang::find($id);
        return view('pesan', ['barang' => $barang]);
    }
}
