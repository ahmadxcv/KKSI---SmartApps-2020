@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" id="email" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="{{ $user->password }}" id="password" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        {{-- <input type="text" name="role" id="role" required> --}}
                        <select name="role" id="role" class="form-control" readonly>
                        <option selected value="{{ $user->role }}">{{ $user->role }}</option>
                            <option value="admin">Admin</option>
                            <option value="guru">Guru</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>
                    <a href="{{ route('users.index') }}" class="btn btn-info">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
