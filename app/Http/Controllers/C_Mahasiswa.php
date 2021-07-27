<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class C_Mahasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mahasiswa::insert([
            'nama_mhs' => $request->nama_mhs,
            'jumlah_orang'=> $request->jumlah_orang,
            'unit_kerja'=> $request->unit_kerja,
            'jangka_waktu'=>$request->jangka_waktu,
            'tujuan'=>$request->tujuan,
            'negara'=>$request->negara,
            'surat_uns'=>$request->surat_uns,
            'catatan_uns'=>$request->catatan_uns,
            'belmawa'=>$request->belmawa,
            'catatan_belmawa'=>$request->catatan_belmawa,
            'ktln_kemensetneg'=>$request->ktln_kemensetneg,
            'catatan_setneg'=>$request->catatan_setneg,
            'status'=>$request->status
        ]);

        //Siswa::create($request->all());

        return redirect('/mahasiswa')->with('status', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    { 
        // mengambil data siswa berdasarkan id yang dipilih
        $mahasiswas = DB::table('mahasiswas')->where('id',$id)->get(); 
        
        // passing data siswa yang didapat ke view edit.blade.php 
        return view('mahasiswa.edit',['mahasiswas' => $mahasiswas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Mahasiwa::where('id', $request->id)
            ->update([
                'nama_mhs' => $request->nama_mhs,
                'jumlah_orang'=> $request->jumlah_orang,
                'unit_kerja'=> $request->unit_kerja,
                'jangka_waktu'=>$request->jangka_waktu,
                'tujuan'=>$request->tujuan,
                'negara'=>$request->negara,
                'surat_uns'=>$request->surat_uns,
                'catatan_uns'=>$request->catatan_uns,
                'belmawa'=>$request->belmawa,
                'catatan_belmawa'=>$request->catatan_belmawa,
                'ktln_kemensetneg'=>$request->ktln_kemensetneg,
                'catatan_setneg'=>$request->catatan_setneg,
                'status'=>$request->status
            ]);
        return redirect('/mahasiswa')->with('status', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_siswa
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
        Mahasiswa::where('id',$id)->delete();
        
        // alihkan halaman ke halaman siswa
        return redirect('/mahasiswa');
    }
}
