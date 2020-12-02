@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('jawabans.store') }}" method="POST">
                        @csrf
                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                        <input type="text" name="soal_id" value="{{ $soal->id }}" hidden>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" value="{{ $soal->judul }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan</label>
                            <input type="text" name="pertanyaan" value="{{ $soal->pertanyaan }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jawaban_soal">Jawaban</label>
                            <textarea type="text" name="jawaban_soal" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection