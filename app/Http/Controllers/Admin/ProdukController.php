<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::latest()->paginate(5);
        return view('admin.produks.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
            'deskripsi' => 'string',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,gif,bmp,svg|max:2048'
        ]);
        $name = time().'.'.$request->file('gambar')->extension();
        $request->file('gambar')->move(public_path('produk_gambar'), $name);
        Produk::create([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'deskripsi' => $request->deskripsi,
            'gambar' => $name
        ]);
        return redirect()->route('produks.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produks.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produks.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
            'deskripsi' => 'string',
            'gambar_baru' => 'image|mimes:jpeg,jpg,png,gif,bmp,svg|max:2048'
        ]);
        if($request->hasFile('gambar_baru')){
            $name = time().'.'.$request->file('gambar_baru')->extension();
            $request->file('gambar_baru')->move(public_path('produk_gambar'), $name);
        }else{
            $name = $request->gambar;
        }
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'deskripsi' => $request->deskripsi,
            'gambar' => $name
        ]);
        return redirect()->route('produks.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produks.index')->with('success', 'Data Berhasil Dihapus');
    }
}
