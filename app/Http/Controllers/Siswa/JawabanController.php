<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use App\Models\Soal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawabans = Jawaban::latest()->paginate(10);
        return view('siswa.jawabans.index', compact('jawabans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'soal_id' => 'required',
            'jawaban_soal' => 'required'
        ]);
        Jawaban::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soal = Soal::findOrFail($id);
        return view('siswa.jawabans.show', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jawaban = DB::table('jawabans')
            ->join('users', 'users.id', '=', 'jawabans.user_id')
            ->join('soals', 'soals.id', '=', 'jawabans.soal_id')
            ->select('jawabans.*', 'users.name', 'users.poin As user_poin', 'soals.judul', 'soals.pertanyaan', 'soals.poin')
            ->where('jawabans.id', $id)
            ->first();
        return view('siswa.jawabans.edit', compact('jawaban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'hasil_periksa' => 'required'
        ]);
        $user_id = $request->user_id;
        $user = User::findOrFail($user_id);
        $user->update([
            'poin' => $request->total_poin
        ]);
        $jawaban = Jawaban::findOrFail($id);
        $jawaban->update([
            'hasil_periksa' => $request->hasil_periksa,
            'status' => 'Selesai'
        ]);
        return redirect()->route('jawabans.index')->with('success', 'Jawaban Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jawaban = Jawaban::findOrFail($id);
        $jawaban->delete();
        return redirect()->route('jawabans.index')->with('success', 'Jawaban Berhasil Dihapus');
    }
}
