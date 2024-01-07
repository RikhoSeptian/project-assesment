<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DosenFormRequest;
use App\Models\Matkul;


class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::orderBy('id', 'DESC')->paginate(5);
        return view('admin.matkul.index', ['matkul' => $matkul]);
    }

    public function create()
    {
        return view('admin.matkul.create');
    }

    public function store(DosenFormRequest $request)
    {
        $validatedData = $request->validated();

        $matkul = new Matkul;

        $matkul->name = $validatedData['name'];
        $matkul->sks = $validatedData['sks'];
        $matkul->status = $request->status == true ? '1' : '0';
        $matkul->save();

        return redirect('admin/matkul')->with('message', 'Matkul added successfully');
    }

    public function edit($id)
    {
        $matkul = Matkul::find($id);
        return view('admin.matkul.edit', compact('matkul'));
    }

    public function update(DosenFormRequest $request, $id)
    {
        $validatedData = $request->validated();

        $matkul = Matkul::findOrFail($id);

        $matkul->name = $validatedData['name'];
        $matkul->sks = $validatedData['sks'];
        $matkul->status = $request->status == true ? '1' : '0';
        $matkul->update();

        return redirect('admin/matkul')->with('message', 'Matkul updated successfully');
    }

    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();
        return redirect('admin/matkul')->with('message', 'Data berhasil dihapus');
    }
}
