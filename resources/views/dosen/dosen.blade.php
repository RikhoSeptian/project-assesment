@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Dosen
                    <a href="{{ url('dosen/create') }}" class="btn btn-primary btn-sm float-end">Add Dosen</a>
                </h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Dosen</th>
                            <th>Prodi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dosen as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->nama_dosen }}</td>
                                    <td>{{ $d->prodi }}</td>
                                    {{-- <td>
                                        @if ($product->category)
                                            {{ ($product->category->name)}}
                                        @else
                                            No Category
                                        @endif
                                    </td> --}}
                                    <td>{{ $prodi->name }}</td>
                                    {{-- <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->status == '1' ? 'hidden':'visible' }}</td> --}}
                                    <td>
                                        <a href="{{ url('dosen/'.$d->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ url('dosen/'.$d->id.'/delete')}}" onclick="return confirm('Are you sure, you want to delete this data?')" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No products Found</td>
                                </tr>
                            @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
