@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">Pilih Soal</h5>
                <p class="card-text">Di menu ini anda dapat memilih soal- soal yang ada.</p>
                <a href="{{ route('jawabans.create') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tukar Poin</h5>
                <p class="card-text">Di menu ini anda dapat menukar poin anda dengan produk- produk yang telah disediakan.</p>
                <a href="{{ route('transaksis.create') }}" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        @foreach($soals as $soal)
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p>{{ $soal->created_at->diffForHumans() }}</p>
                    <h5 class="card-subtitle text-muted">{{ $soal->poin }} Poin</h5>
                </div>
                <h4 class="card-title">{{ $soal->judul }}</h4>
                <p class="card-text">{{ $soal->pertanyaan }}</p>
                <div class="text-right">
                    <a href="{{ route('jawabans.show', $soal->id) }}" class="btn btn-primary">Jawab</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{ $soals->links() }}

@endsection
