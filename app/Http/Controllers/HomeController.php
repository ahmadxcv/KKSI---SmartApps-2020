<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            return view('admin.home');
        } elseif (Gate::allows('isGuru')) {
            return view('guru.home');
        } elseif (Gate::allows('isSiswa')) {
            return view('siswa.home');
        } else {
            return view('auth.login');
        }
    }
}
