@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h3>Add Dosen
                    <a href="{{ url('admin/dosen')}}" class="btn btn-primary text-white btn-sm float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/dosen/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" />
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">NIP</label>
                            <input type="number" name="nip" class="form-control" />
                            @error('nip') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Select Category</label>
                            <select name="matkul_id" class="form-control">
                                @foreach ($matkul as $mk)
                                <option value="{{ $mk->id}}">{{ $mk->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label><br>
                            <input type="checkbox" name="status" />
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection