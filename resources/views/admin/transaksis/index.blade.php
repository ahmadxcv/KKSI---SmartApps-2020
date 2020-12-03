@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-body">
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
</div>
@endsection
