@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="car-body">
                <img src="{{ asset('produk_gambar/'.$produk->gambar) }}" alt="gambar.jpg" width="300" height="300">
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('transaksis.store') }}" method="POST">
                    @csrf
                    <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                    <input type="text" name="produk_id" value="{{ $produk->id }}" hidden>
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-4 col-form-label">Nama Produk</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="nama_barang" value="{{ $produk->nama_barang }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_barang" class="col-sm-4 col-form-label">Harga Produk</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="harga_barang" value="{{ $produk->harga_barang }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_barang" class="col-sm-4 col-form-label">Jumlah Stok</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="jumlah_barang" value="{{ $produk->jumlah_barang }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_barang" class="col-sm-4 col-form-label">Jumlah Tukar</label>
                        <div class="col-md-2 col-sm-6">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" min="0" max="10" maxlength="2" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-sm-4 col-form-label">Total Bayar</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control-plaintext" name="total" id="total" readonly>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tukarkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    document.getElementById('jumlah').addEventListener('change', function(e) {
        document.getElementById('total').value = document.getElementById('jumlah').value * document.getElementById('harga_barang').value
    });

</script>
@endsection
