@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_barang">Nama</label>
                        <input type="text" name="nama_barang" value="{{ $produk->nama_barang }}" id="nama_barang" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga</label>
                        <input type="text" name="harga_barang" value="{{ $produk->harga_barang }}" id="harga_barang" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah</label>
                        <input type="number" name="jumlah_barang" value="{{ $produk->jumlah_barang }}" id="jumlah_barang" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="textarea" name="deskripsi" value="{{ $produk->deskripsi }}" id="deskripsi" cols="30" rows="10" class="form-control">
                    </div>

                    <a href="{{ route('produks.index') }}" class="btn btn-info">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <img src="{{ asset('produk_gambar/'.$produk->gambar) }}" alt="gambar.jpg" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
