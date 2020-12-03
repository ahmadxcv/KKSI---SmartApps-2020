<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class TransaksiController extends Controller
{
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            $transaksis = DB::table('transaksis')
            ->join('users', 'users.id', '=', 'transaksis.user_id')
            ->join('produks', 'produks.id', '=', 'transaksis.produk_id')
            ->select('transaksis.*', 'users.name', 'users.poin As user_poin', 'produks.nama_barang')
            ->latest()
            ->paginate(10);
            return view('admin.transaksis.index', compact('transaksis'));
        } else {
            return abort(403);
        }
    }
    public function create()
    {
        if (Gate::allows('isSiswa')) {
            $produks = Produk::latest()->paginate(12);
            return view('admin.transaksis.create', compact('produks'));
        } else {
            return abort(403);
        }
    }
    public function show($id)
    {
        if (Gate::allows('isSiswa')) {
            $produk = Produk::findOrFail($id);
            return view('admin.transaksis.show', compact('produk'));
        } else {
            return abort(403);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'jumlah'    => 'required',
            'total' => 'required'
        ]);
        if (Auth::user()->poin < $request->total) {
            return redirect()->back()->with('success', 'Produk Gagal Ditukar! Poin Kurang');
        } else {
            Transaksi::create($request->all());
            Auth::user()->poin - $request->total;
            return redirect()->route('transaksis.create')->with('success', 'Produk Berhasil Ditukar');
        }
    }
    public function edit($id)
    {
        $transaksi = DB::table('transaksis')
            ->join('users', 'users.id', '=', 'transaksis.user_id')
            ->join('produks', 'produks.id', '=', 'transaksis.produk_id')
            ->select('transaksis.*', 'users.name', 'users.poin As user_poin', 'produks.nama_barang', 'produks.jumlah_barang')
            ->where('transaksis.id', $id)
            ->first();
        return view('admin.transaksis.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $user_id = $request->user_id;
        $user = User::findOrFail($user_id);
        $user->update([
            'poin' => $request->total_poin
        ]);
        $produk_id = $request->produk_id;
        $produk = Produk::findOrFail($produk_id);
        $produk->update([
            'jumlah_barang' => $request->sisa_barang
        ]);
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update([
            'status' => 'selesai'
        ]);
        return redirect()->route('transaksis.index')->with('success', 'Transaksi Berhasil Diperbaharui');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksis.index')->with('success', 'Transaksi Berhasil Dihapus');
    }
}
