<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Soal;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            $transaksis = Transaksi::latest()->paginate(10);
            return view('admin.home', compact('transaksis'));
        } elseif (Gate::allows('isGuru')) {
            $jawabans = Jawaban::latest()->paginate(10);
            return view('guru.home', compact('jawabans'));
        } elseif (Gate::allows('isSiswa')) {
            $soals = Soal::latest()->paginate(5);
            return view('siswa.home', compact('soals'));
        } else {
            return view('auth.login');
        }
    }
}
