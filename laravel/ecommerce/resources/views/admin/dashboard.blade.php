@extends('admin.layout.app')

{{-- orangtua/parent dari setiap halaman --}}

{{-- extends itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extends --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('dashboard')
    <h1>Ini adalah halaman dasboard</h1>
@endsection
