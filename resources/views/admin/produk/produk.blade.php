@extends('admin.layout.app')
@section('dashboard')
    <h1 class="mt-4">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Table
        </div>
        <div class="card-body">
            <a href="{{url('/dashboard/produk/create')}}" class="btn btn-primary">Tambah data</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga beli</th>
                        <th>Stok</th>
                        <th>Min Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($produk as $prod)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $prod->kode }}</td>
                            <td>{{ $prod->nama }}</td>
                            <td>{{ $prod->harga_jual }}</td>
                            <td>{{ $prod->harga_beli }}</td>
                            <td>{{ $prod->stok }}</td>
                            <td>{{ $prod->min_stok }}</td>
                            <td>{{ $prod->deskripsi }}</td>
                            <td>{{ $prod->nama_kategori }}</td>
                            <td>
                                <a href="{{url('/dashboard/produk/edit/'. $prod->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{url('/dashboard/produk/delete/'. $prod->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
