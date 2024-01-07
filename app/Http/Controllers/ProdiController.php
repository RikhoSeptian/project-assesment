<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = prodi::all();
        return view('prodi.prodi', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        prodi::create([
            'nama_prodi' => $request['nama'],
        ]);

        return redirect('/prodi')->with('message', 'prodi added successfully');
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
        $prodi = prodi::find($id);
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $prodi = prodi::find($id);
        $prodi->nama_prodi = $request->input('nama');
        $prodi->save();
        return redirect('/prodi')->with('success', 'Data Produk berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prodi = prodi::find($id);
        $prodi->delete();
        return redirect('/prodi')->with('message', 'Data berhasil dihapus');
    }
}
