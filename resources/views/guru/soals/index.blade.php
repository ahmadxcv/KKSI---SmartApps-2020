@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-sm-12">
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
                            <option selected value="">== Pilih Level ==</option>
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
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Pertanyaan</th>
                            <th>Level</th>
                            <th>Poin</th>
                            <th style="width:80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($soals as $soal)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $soal->judul }}</td>
                            <td>{{ $soal->pertanyaan }}</td>
                            <td>{{ $soal->level }}</td>
                            <td>{{ $soal->poin }}</td>
                            <td class="btn-group">
                                <a href="{{ route('soals.edit', $soal->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('soals.destroy', $soal->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $soals->links() }}
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
