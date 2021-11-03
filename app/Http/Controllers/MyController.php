<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public function barangs()
    {
        $query = App\Models\Barang::all();
        return view('toko.barang', compact('query'));
    }

    public function pesanans()
    {
        $query = App\Models\Pesanan::all();
        return view('toko.pesanan', compact('query'));
    }

    public function pembelians()
    {
        $query = App\Models\Pembelian::all();
        return view('toko.pembelian', compact('query'));
    }

    public function pembelis()
    {
        $query = App\Models\Pembeli::all();
        return view('toko.pembeli', compact('query'));
    }

    public function supliers()
    {
        $query = App\Models\Suplier::all();
        return view('toko.suplier', compact('query'));
    }

    // function untuk data view single
    public function singles($id)
    {
        $query = App\Models\Barang::findOrfail($id);
        return view('toko.single', compact('query'));
    }

}
