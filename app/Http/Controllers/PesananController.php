<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan;
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->getAllData()]);
    }

}
