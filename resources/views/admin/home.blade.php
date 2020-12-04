@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manajemen User</h5>
                <p class="card-text">Di menu ini anda dapat mengelola data pengguna aplikasi.</p>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manajemen Produk</h5>
                <p class="card-text">Di menu ini anda dapat mengelola data produk yang bisa ditukar oleh siswa.</p>
                <a href="{{ route('produks.index') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transaksi</h5>
                <p class="card-text">Di menu ini anda dapat mengelola data transaksi penukaran poin oleh siswa.</p>
                <a href="{{ route('transaksis.index') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transaksi Terbaru</h5>
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($transaksis as $transaksi)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ date('d/m/Y', strtotime($transaksi->created_at)) }}</td>
                                <td>{{ $transaksi->name }}</td>
                                <td>{{ $transaksi->nama_barang }}</td>
                                <td>{{ $transaksi->jumlah }}</td>
                                <td>{{ $transaksi->total }}</td>
                                @if($transaksi->status == "proses")
                                <td><button class="btn btn-warning btn-sm">{{ $transaksi->status }}</button></td>
                                @else
                                <td><button class="btn btn-danger btn-sm">{{ $transaksi->status }}</button></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $transaksis->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
