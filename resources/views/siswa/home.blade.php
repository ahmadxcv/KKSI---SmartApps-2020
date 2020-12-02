@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pilih Soal</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tukar Poin</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Buka</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    @foreach($soals as $soal)
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p>{{ $soal->created_at->diffForHumans() }}</p>
                    <h5 class="card-subtitle text-muted">{{ $soal->poin }} Poin</h5>
                </div>
                <h4 class="card-title">{{ $soal->judul }}</h4>
                <p class="card-text">{{ $soal->pertanyaan }}</p>
                <div class="text-right">
                    <a href="{{ route('soals.show', $soal->id) }}" class="btn btn-primary">Jawab</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $soals->links() }}
</div>
@endsection
