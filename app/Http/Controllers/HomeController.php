<?php

namespace App\Http\Controllers;

use App\Models\Soal;
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
            $soals = Soal::latest()->paginate(5);
            return view('siswa.home', compact('soals'));
        } else {
            return view('auth.login');
        }
    }
}
