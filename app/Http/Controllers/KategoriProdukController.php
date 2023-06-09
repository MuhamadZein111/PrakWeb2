<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;

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

}
