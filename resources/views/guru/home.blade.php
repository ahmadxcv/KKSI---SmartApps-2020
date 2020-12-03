@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Manajemen Soal</h5>
                <p class="card-text">Di menu ini anda dapat mengelola data soal yang akan disajikan kepada siswa.</p>
                <a href="{{ route('soals.index') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Periksa Jawaban</h5>
                <p class="card-text">Di menu ini anda dapat mengelola data soal yang telah dijawab oleh siswa.</p>
                <a href="{{ route('jawabans.index') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jawaban Terbaru</h5>
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Tanggal</td>
                                <td>Nama</td>
                                <td>Soal</td>
                                {{-- <td>Jawaban</td> --}}
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no =1;
                            @endphp
                            @foreach($jawabans as $jawaban)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ date('d/m/Y', strtotime($jawaban->created_at)) }}</td>
                                <td>{{ $jawaban->name }}</td>
                                <td>{{ $jawaban->pertanyaan }}</td>
                                {{-- <td>{{ $jawaban->jawaban_soal }}</td> --}}
                                @if($jawaban->status == "Proses")
                                <td><button class="btn btn-warning btn-sm">{{ $jawaban->status }}</button></td>
                                @else
                                <td><button class="btn btn-danger btn-sm">{{ $jawaban->status }}</button></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $jawabans->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
