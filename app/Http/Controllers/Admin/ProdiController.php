<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prodi;
// use Illuminate\Support\Str;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\File;
use App\Http\Requests\ProdiFormRequest;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::orderBy('id', 'DESC')->paginate(5);
        return view('admin.prodi.index', ['prodis' => $prodis]);
    }

    public function create()
    {
        return view('admin.prodi.create');
    }

    public function store(ProdiFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = new Prodi;

        $category->name = $validatedData['name'];
        $category->status = $request->status == true ? '1' : '0';
        $category->save();

        return redirect('admin/prodi')->with('message', 'Prodi added successfully');
    }

    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('admin.prodi.edit', compact('prodi'));
    }

    public function update(ProdiFormRequest $request, $prodi)
    {
        $validatedData = $request->validated();

        $category = Prodi::findOrFail($prodi);

        $category->name = $validatedData['name'];
        $category->status = $request->status == true ? '1' : '0';
        $category->update();

        return redirect('admin/prodi')->with('message', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $prodi = prodi::find($id);
        $prodi->delete();
        return redirect('admin/prodi')->with('message', 'Data berhasil dihapus');
    }
}

