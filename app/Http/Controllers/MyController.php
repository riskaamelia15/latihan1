<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class MyController extends Controller
{
    public function barangs()
    {
        $query = App\Models\Barang::all();
        return view('toko.barang', compact('query'));
    }

    public function singles($id)
    {
        $query = Barang::findOrfail($id);
        return view('toko.single', compact('query'));
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

}
