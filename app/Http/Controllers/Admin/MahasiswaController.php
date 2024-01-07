<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Http\Requests\MahasiswaFormRequest;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('matkul')->paginate(5);
        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.create', compact('mahasiswa'));
    }

    public function store(MahasiswaFormRequest $request)
    {
        $validateData = $request->validated();

        $category = Prodi::findOrFail($validateData['matkul_id']);
        $product = $category->products()->create([
            'matkul_id' => $validateData['matkul_id'],
            'name' => $validateData['name'],
            'nip' => $validateData['nip'],
            'status' => $request->status == true ? '1':'0',
        ]);

        return redirect('admin/dosen')->with('message', 'Dosen added successfully');
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
        return redirect('admin/Mahasiswa')->with('message', 'Data berhasil dihapus');
    }
}
