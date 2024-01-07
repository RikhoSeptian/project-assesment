<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Http\Requests\DosenFormRequest;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::with('matkul')->paginate(5);
        return view('admin.dosen.index', ['dosens' => $dosens]);
    }

    public function create()
    {
        $matkul = Matkul::all();
        return view('admin.dosen.create', compact('matkul'));
    }

    public function store(DosenFormRequest $request)
    {
        $validateData = $request->validated();

        $matkul = Matkul::findOrFail($validateData['matkul_id']);
        $product = $matkul->matkul()->create([
            'matkul_id' => $validateData['matkul_id'],
            'name' => $validateData['name'],
            'nip' => $validateData['nip'],
            'status' => $request->status == true ? '1':'0',
        ]);

        return redirect('admin/dosen')->with('message', 'Dosen added successfully');
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(DosenFormRequest $request, $prodi)
    {
        $validatedData = $request->validated();

        $dosen = Dosen::findOrFail($prodi);

        $dosen->name = $validatedData['name'];
        $dosen->status = $request->status == true ? '1' : '0';
        $dosen->update();

        return redirect('admin/dosen')->with('message', 'Dosen updated successfully');
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('admin/prodi')->with('message', 'Data berhasil dihapus');
    }
}
