<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = dosen::all();
        return view('dosen.dosen', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = prodi::all();
        return view('dosen.create', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dosen::create([
            'nama_dosen' => $request['nama'],
            'ruang' => 
        ]);

        return redirect('/dosen')->with('message', 'prodi added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $dosen = dosen::find($id);
        $dosen->nama_dosen = $request->input('nama_product');
        $dosen->ruang = $request->input('ruang');
        $dosen->save();
        return redirect('/dosen')->with('success', 'Data Produk berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('message', 'Data berhasil dihapus');
    }
}
