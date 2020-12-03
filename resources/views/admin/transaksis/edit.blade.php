@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('transaksis.update', $transaksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="user_id" value="{{ $transaksi->user_id }}" hidden readonly required>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" class="form-control plaintext" value="{{ date('d/m/Y', strtotime($transaksi->created_at)) }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="produk_id">Produk</label>
                        <input type="text" class="form-control plaintext" value="{{ $transaksi->nama_barang }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control plaintext" value="{{ $transaksi->jumlah }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" class="form-control plaintext" id="total" value="{{ $transaksi->total }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" value="{{ $transaksi->status }}" class="form-control" readonly>
                    </div>
                    <input type="text" name="user_poin" id="user_poin" value="{{ $transaksi->user_poin }}" hidden readonly required>
                    <input type="text" name="total_poin" id="total_poin" readonly required>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    <a href="{{ route('transaksis.index') }}" class="btn btn-info">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    var total = document.getElementById("total").value;
    var user_poin = document.getElementById("user_poin").value
    document.getElementById("total_poin").value = parseInt(user_poin) - parseInt(total);
</script>
@endsection
