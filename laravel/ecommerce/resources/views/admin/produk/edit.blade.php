@extends('admin.layout.app')
@section('dashboard')
    <h1 class="mt-4">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="{{ url('/dashboard/produk/update') }}">
                {{ csrf_field() }}
                @foreach ($produk as $prod)
                    <div class="form-group row mb-3">
                        <label for="kode" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                            <input type="hidden" name="id" value="{{$prod->id}}">
                            <input id="kode" name="kode" type="text" class="form-control" value="{{$prod->kode}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control" value="{{$prod->nama}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="harga_jual" class="col-4 col-form-label">Harga jual</label>
                        <div class="col-8">
                            <input id="harga_jual" name="harga_jual" type="text" class="form-control" value="{{$prod->harga_jual}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="harga_beli" class="col-4 col-form-label">Harga beli</label>
                        <div class="col-8">
                            <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="{{$prod->harga_beli}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <input id="stok" name="stok" type="text" class="form-control" value="{{$prod->stok}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="min_stok" class="col-4 col-form-label">Min stok</label>
                        <div class="col-8">
                            <input id="min_stok" name="min_stok" type="text" class="form-control" value="{{$prod->min_stok}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <input id="deskripsi" name="deskripsi" type="text" class="form-control" value="{{$prod->deskripsi}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="kategori_produk_id" class="col-4 col-form-label">Kategori produk</label>
                        <div class="col-8">
                            <select id="kategori_produk_id" name="kategori_produk_id" class="form-control">
                                <option value="{{$prod->kategori_produk_id}}">{{$prod->nama_kategori}}</option>
                                @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
@endsection
