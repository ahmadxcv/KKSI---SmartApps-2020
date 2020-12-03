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
                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Tanggal</td>
                            <td>Nama</td>
                            <td>Barang</td>
                            <td>Jumlah</td>
                            <td>Total</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
