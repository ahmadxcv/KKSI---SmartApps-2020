@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-6">
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
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jawaban Terbaru</h5>
                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Tanggal</td>
                            <td>Nama</td>
                            <td>Soal</td>
                            <td>Jawaban</td>
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
                            <td>{{ $jawaban->created_at }}</td>
                            <td>{{ $jawaban->user_id }}</td>
                            <td>{{ $jawaban->soal_id }}</td>
                            <td>{{ $jawaban->jawaban_soal }}</td>
                            <td>{{ $jawaban->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
