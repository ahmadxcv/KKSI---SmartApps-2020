@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($produks as $produk)
    <div class="col-md-3 col-sm-12">
        <div class="card mb-2">
            <img src="{{ asset('produk_gambar/'.$produk->gambar) }}" alt="gambar.jpg" width="160" height="160" class="card-img-top">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{ $produk->nama_barang }}</h5>
                    <p>{{ $produk->harga_barang }} poin</p>
                </div>
                <a href="{{ route('transaksis.show', $produk->id) }}" class="btn btn-primary">Tukar</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    {{ $produks->links() }}
</div>
@endsection
