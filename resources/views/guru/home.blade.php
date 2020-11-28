@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manajemen Soal</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ route('soals.index') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Periksa Jawaban</h5>
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
                <h5 class="card-title">Jawaban Terbaru</h5>
                <table class="table table-bordered">
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
