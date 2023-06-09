@extends('admin.layout.app')
@section('dashboard')
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="{{ url('/dashboard/kategori/update') }}">
                {{ csrf_field() }}
                @foreach ($kategori as $kat)
                    <div class="form-group row mb-3">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="hidden" name="id" value="{{$kat->id}}">
                            <input id="nama" name="nama" type="text" class="form-control" value="{{$kat->nama}}">
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