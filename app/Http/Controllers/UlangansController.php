<?php

namespace App\Http\Controllers;

use App\Ulangan;
use Illuminate\Http\Request;

class UlangansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ulangans = Ulangan::all();
        return view('ulangans.index', compact('ulangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ulangans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ulangan = new Ulangan;
        // $ulangan->nama_mk = $request->nama_mk;
        // $ulangan->dosen = $request->dosen;
        // $ulangan->jumlah_soal = $request->jumlah_soal;
        // $ulangan->keterangan = $request->keterangan;

        // $ulangan->save();

        // Ulangan::create([
        //     'nama_mk' => $request->nama_mk,
        //     'dosen' => $request->dosen,
        //     'jumlah_soal' => $request->jumlah_soal,
        //     'keterangan' => $request->keterangan
        // ]);

        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
        ]);

        Ulangan::create($request->all());
        return redirect('/ulangans')->with('status', 'Data Ujian Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ulangan  $ulangan
     * @return \Illuminate\Http\Response
     */
    public function show(Ulangan $ulangan)
    {
        return view('ulangans.show', compact('ulangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ulangan  $ulangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ulangan $ulangan)
    {
        return view('ulangans.edit', compact('ulangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ulangan  $ulangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ulangan $ulangan)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
        ]);
        
        Ulangan::where('id', $ulangan->id)
            ->update([
                'nama_mk' => $request->nama_mk,
                'dosen' => $request->dosen,
                'jumlah_soal' => $request->jumlah_soal,
                'keterangan' => $request->keterangan
            ]);
            return redirect('/ulangans')->with('status', 'Data Ujian Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ulangan  $ulangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ulangan $ulangan)
    {
        Ulangan::destroy($ulangan->id);
        return redirect('/ulangans')->with('status', 'Data Ujian Berhasil Dihapus!');
    }
}
