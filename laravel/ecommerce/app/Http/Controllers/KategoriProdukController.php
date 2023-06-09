<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = new KategoriProduk;
        return view('admin.kategori.kategori', ['kategori' => $kategori->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new KategoriProduk;
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('dashboard/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriProduk $kategoriProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriProduk $kategoriProduk)
    {
        $kategori = KategoriProduk::find($request->id);
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('dashboard/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('dashboard/kategori');
    }
}
