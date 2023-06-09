@extends('admin.layout.app')
@section('dashboard')
    <h1 class="mt-4">Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Table
        </div>
        <div class="card-body">
            <a href="{{ url('/dashboard/pesanan/create') }}" class="btn btn-primary">Tambah data</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>QTY</th>
                        <th>Deskripsi</th>
                        <th>Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $p->tanggal }}</td>
                            <td>{{ $p->nama_pemesan }}</td>
                            <td>{{ $p->alamat_pemesan }}</td>
                            <td>{{ $p->no_hp }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->jumlah_pesanan }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td>{{ $p->nama_produk }}</td>
                            <td>
                                <a href="{{ url('/dashboard/pesanan/edit/' . $p->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ url('/dashboard/pesanan/delete/' . $p->id) }}"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
