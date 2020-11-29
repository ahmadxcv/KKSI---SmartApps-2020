@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('transaksis.update', $transaksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" class="form-control plaintext" value="{{ $transaksi->created_at }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="produk_id">Produk</label>
                        <input type="text" class="form-control plaintext" value="{{ $transaksi->produk_id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control plaintext" value="{{ $transaksi->jumlah }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" class="form-control plaintext" value="{{ $transaksi->total }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                            <option selected value="{{ $transaksi->status }}">{{ $transaksi->status }}</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('transaksis.index') }}" class="btn btn-info">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
