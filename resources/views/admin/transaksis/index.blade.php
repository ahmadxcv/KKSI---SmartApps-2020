@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th style="width:80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($transaksis as $transaksi)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $transaksi->created_at }}</td>
                            <td>{{ $transaksi->nama }}</td>
                            <td>{{ $transaksi->produk }}</td>
                            <td>{{ $transaksi->jumlah }}</td>
                            <td>{{ $transaksi->total }}</td>
                            <td>{{ $transaksi->status }}</td>
                            <td class="btn-group">
                                <a href="{{ route('transaksis.edit', $transaksi->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $transaksis->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
