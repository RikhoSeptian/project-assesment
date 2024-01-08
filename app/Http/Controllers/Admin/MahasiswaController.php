<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Http\Requests\MahasiswaFormRequest;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('Prodis')->paginate(5);
        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        $prodi = Prodi::where('status','0')->get();
        return view('admin.mahasiswa.create', compact('prodi'));
    }

    public function store(MahasiswaFormRequest $request)
    {
        $validateData = $request->validated();

        Mahasiswa::create([
            'name' => $validateData['name'],
            'nim' => $validateData['nim'],
            'prodi_id' => $validateData['prodi_id'],
        ]);

        // if ($validateData = Mahasiswa::create($request)) {
        //     $validateData->Prodi()->sync($request['prodi_id']);

        //     return redirect('admin/dosen')->with('message', 'Dosen added successfully');
        // }
        return redirect('admin/mahasiswa')->with('message', 'Dosen added successfully');
    }

    public function edit($id)
    {
        $dosen = Mahasiswa::find($id);
        return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(MahasiswaFormRequest $request, $prodi)
    {
        $validatedData = $request->validated();

        $dosen = Mahasiswa::findOrFail($prodi);

        $dosen->name = $validatedData['name'];
        $dosen->status = $request->status == true ? '1' : '0';
        $dosen->update();

        return redirect('admin/Mahasiswa')->with('message', 'Dosen updated successfully');
    }

    public function destroy($id)
    {
        $dosen = Mahasiswa::find($id);
        $dosen->delete();
        return redirect('admin/mahasiswa')->with('message', 'Data berhasil dihapus');
    }
}
