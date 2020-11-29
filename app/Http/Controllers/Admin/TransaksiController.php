<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $transaksis = Transaksi::latest()->paginate(10);
        return view('admin.transaksis.index', compact('transaksis'));
    }
    public function create(){
        $produks = Produk::latest()->paginate(12);
        return view('admin.transaksis.create', compact('produks'));
    }
    public function show($id){
        $produk = Produk::findOrFail($id);
        return view('admin.transaksis.show', compact('produk'));
    }
    public function store(Request $request){
        $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'jumlah'    => 'required',
            'total' => 'required'
        ]);
        Transaksi::create($request->all());
        return redirect()->route('transaksis.create')->with('success', 'Produk Berhasil Ditukar');
    }
    public function edit($id){
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksis.edit', compact('transaksi'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'status' => 'required'
        ]);
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update();
        return redirect()->route('transaksis.index')->with('success', 'Transaksi Berhasil Diperbaharui');
    }

    public function destroy($id){
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksis.index')->with('success', 'Transaksi Berhasil Dihapus');
    }
}
