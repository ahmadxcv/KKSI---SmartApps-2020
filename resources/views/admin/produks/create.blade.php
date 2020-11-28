@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_barang">Nama</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga</label>
                        <input type="text" name="harga_barang" id="harga_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah</label>
                        <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('produks.index') }}" class="btn btn-info">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
