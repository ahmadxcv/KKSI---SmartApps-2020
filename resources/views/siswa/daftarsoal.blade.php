@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-sm-12">
        @foreach($soals as $soal)
        <div class="card mb-3">
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
@endsection
