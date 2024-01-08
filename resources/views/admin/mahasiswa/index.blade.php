@extends('layouts.admin')

@section('content')
    
<div>
    <div>
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Mahasiswa
                            <a href="{{ url('admin/mahasiswa/create') }}" class="btn btn-primary btn-sm float-end">Add
                                Mahasiswa</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>NIM</th>
                                    <th>Prodi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $mhs)
                                    <tr>
                                        <td>{{ $mhs->id }}</td>
                                        <td>{{ $mhs->name }}</td>
                                        <td>{{ $mhs->nim }}</td>
                                        <td>{{ ($mhs->Prodis != null) ? $mhs->Prodis->name : '' }}
                                            {{  $mhs->prodi_id }}
                                        </td>
                                        <td>{{ $mhs->status == '1' ? 'Hidden' : 'Visible' }}
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/mahasiswa/' . $mhs->id . '/edit') }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ url('admin/mahasiswa/'.$mhs->id.'/delete')}}" onclick="return confirm('Are you sure, you want to delete this data?')" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div>
                            {{ $mhs->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection