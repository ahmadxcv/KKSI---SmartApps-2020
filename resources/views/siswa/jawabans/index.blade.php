@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
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
                                <td>Jawaban</td>
                                <td>Status</td>
                                <td>Aksi</td>
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
                                <td>{{ $jawaban->jawaban_soal }}</td>
                                @if($jawaban->status == "Proses")
                                <td><button class="btn btn-warning btn-sm">{{ $jawaban->status }}</button></td>
                                @else
                                <td><button class="btn btn-danger btn-sm">{{ $jawaban->status }}</button></td>
                                @endif
                                <td class="btn-group">
                                    <a href="{{ route('jawabans.edit', $jawaban->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('jawabans.destroy', $jawaban->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
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
