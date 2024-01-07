<?php

namespace App\Http\Controllers;

use App\Models\matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkul = matkul::all();
        return view('matkul.matkul', compact('matkul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        matkul::create([
            'nama_mataKuliah' => $request['nama'],
            'ruang' => $request['ruang'],
        ]);

        return redirect('/matkul')->with('message', 'prodi added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prodi = matkul::find($id);
        return view('matkul.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prodi = matkul::find($id);
        $prodi->nama_prodi = $request->input('nama_product');
        $prodi->ruang = $request->input('ruang');
        $prodi->save();
        return redirect('/matkul')->with('success', 'Data Produk berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prodi = matkul::find($id);
        $prodi->delete();
        return redirect('/matkul')->with('message', 'Data berhasil dihapus');
    }
}
