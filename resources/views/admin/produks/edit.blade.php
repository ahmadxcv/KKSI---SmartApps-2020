@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_barang">Nama</label>
                        <input type="text" name="nama_barang" value="{{ $produk->nama_barang }}" id="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga</label>
                        <input type="text" name="harga_barang" value="{{ $produk->harga_barang }}" id="harga_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah</label>
                        <input type="number" name="jumlah_barang" value="{{ $produk->jumlah_barang }}" id="jumlah_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="textarea" name="deskripsi" value="{{ $produk->deskripsi }}" id="deskripsi" cols="30" rows="10" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="text" name="gambar" value="{{ $produk->gambar }}" hidden>
                        <input type="file" name="gambar_baru" id="gambar_baru" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('produks.index') }}" class="btn btn-info">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
