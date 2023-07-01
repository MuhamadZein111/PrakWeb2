@extends('admin.layout.app')
@section('dashboard')
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Table
        </div>
        <div class="card-body">
            @if (Auth::user()->role == 'admin')
                <a href="{{ url('/dashboard/kategori/create') }}" class="btn btn-primary">Tambah data</a>
            @endif
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kategori as $kat)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $kat->nama }}</td>
                            <td>
                                @if (Auth::user()->role == 'admin')
                                    <a href="{{ url('/dashboard/kategori/edit/' . $kat->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <a href="{{ url('/dashboard/kategori/delete/' . $kat->id) }}"
                                        class="btn btn-danger">Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
