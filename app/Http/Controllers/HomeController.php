<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            $transaksis = Transaksi::latest()->paginate(10);
            return view('admin.home', compact('transaksis'));
        } elseif (Gate::allows('isGuru')) {
            $jawabans = DB::table('jawabans')
            ->join('users', 'users.id', '=', 'jawabans.user_id')
            ->join('soals', 'soals.id', '=', 'jawabans.soal_id')
            ->select('jawabans.*', 'users.name', 'users.poin As user_poin', 'soals.judul', 'soals.pertanyaan', 'soals.poin')
            ->latest()
            ->paginate(10);
            return view('guru.home', compact('jawabans'));
        } elseif (Gate::allows('isSiswa')) {
            $soals = Soal::latest()->paginate(5);
            return view('siswa.home', compact('soals'));
        } else {
            return view('auth.login');
        }
    }
}
