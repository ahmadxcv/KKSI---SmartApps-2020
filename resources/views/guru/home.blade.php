@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manajemen User</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manajemen Produk</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transaksi</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transaksi Terbaru</h5>
                <table class="table table-bordered">
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
