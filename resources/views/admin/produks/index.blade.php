@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-xs-12">
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
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Gambar</th>
                                <th style="width:80px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($produks as $produk)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $produk->nama_barang }}</td>
                                <td>{{ $produk->harga_barang }}</td>
                                <td>{{ $produk->jumlah_barang }}</td>
                                <td><img src="{{ asset('produk_gambar/'.$produk->gambar) }}" alt="gambar.jpg" width="20" height="20"></td>
                                <td class="btn-group">
                                    <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('produks.destroy', $produk->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $produks->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
