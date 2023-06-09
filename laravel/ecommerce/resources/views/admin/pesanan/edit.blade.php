@extends('admin.layout.app')
@section('dashboard')
    <h1 class="mt-4">Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="{{ url('/dashboard/pesanan/update') }}">
                {{ csrf_field() }}
                @foreach ($pesanan as $p)
                    <div class="form-group row mb-3">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <input type="hidden" name="id" value="{{$p->id}}">
                            <input id="tanggal" name="tanggal" type="date" class="form-control" value="{{$p->tanggal}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama_pemesan" class="col-4 col-form-label">Nama pemesan</label>
                        <div class="col-8">
                            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="{{$p->nama_pemesan}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alamat_pemesan" class="col-4 col-form-label">Alamat pemesan</label>
                        <div class="col-8">
                            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="{{$p->alamat_pemesan}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="no_hp" class="col-4 col-form-label">No hp</label>
                        <div class="col-8">
                            <input id="no_hp" name="no_hp" type="text" class="form-control" value="{{$p->no_hp}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" type="text" class="form-control" value="{{$p->email}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah pesanan</label>
                        <div class="col-8">
                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" value="{{$p->jumlah_pesanan}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <input id="deskripsi" name="deskripsi" type="text" class="form-control" value="{{$p->deskripsi}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="produk_id" class="col-4 col-form-label">produk</label>
                        <div class="col-8">
                            <select id="produk_id" name="produk_id" class="form-control">
                                <option value="{{$p->produk_id}}">{{$p->nama_produk}}</option>
                                @foreach ($produk as $prod)
                                    <option value="{{ $prod->id }}">{{ $prod->nama }}</option>
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
