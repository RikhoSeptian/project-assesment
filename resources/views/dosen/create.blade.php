@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Dosen
                        <a href="{{ url('/dosen')}}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('/dosen/add') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="">Nama Dosen</label>
                        <input type="text" name="nama" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>Select Category</label>
                        <select required class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach ($prodis as $prodi)
                            <option value="{{ $prodi->id}}">{{ $prodi->nama_prodi }}</option> 
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="">Color Code</label>
                        <input type="text" name="code" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Color Status</label><br>
                        <input type="checkbox" name="status" style="width: 20px; height: 20px;" /> Checked=Hidden,UnChecked=Visible
                    </div> --}}
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
