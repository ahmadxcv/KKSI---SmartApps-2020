@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jawabans.update', $jawaban->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="user_id" value="{{ $jawaban->user_id }}" hidden>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="{{ $jawaban->judul }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" name="pertanyaan" value="{{ $jawaban->pertanyaan }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="poin">Poin</label>
                        <input type="text" name="poin" value="{{ $jawaban->poin }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jawaban_soal">Jawaban</label>
                        <input type="text" name="jawaban_soal" value="{{ $jawaban->jawaban_soal }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="hasil_periksa">Hasil Periksa</label>
                        <select name="hasil_periksa" id="hasil_periksa" class="form-control" required>
                            <option value="Benar">Benar</option>
                            <option value="Salah">Salah</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('jawabans.index') }}" class="btn btn-info">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
