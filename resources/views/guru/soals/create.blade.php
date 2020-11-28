@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('soals.store') }}" method="POST">
                    @csrf
                    <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" name="pertanyaan" id="pertanyaan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select name="level" id="level" class="form-control">
                            <option value="mudah">Mudah</option>
                            <option value="sedang">Sedang</option>
                            <option value="sulit">Sulit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="poin">Poin</label>
                        <input name="poin" id="poin" class="form-control" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('produks.index') }}" class="btn btn-info">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.getElementById('level').addEventListener('change', function(e) {
        if (e.target.value === "mudah") {
            document.getElementById("poin").value = 10;
        } else if (e.target.value === "sedang") {
            document.getElementById("poin").value = 20;
        } else if (e.target.value === "sulit") {
            document.getElementById("poin").value = 30;
        }
    });
</script>
@endsection
