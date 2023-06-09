<?php

namespace App\Models;

use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produk";
    protected $fillable = [
        "kode",
        "nama",
        "harga_jual",
        "harga_beli",
        "stok",
        "min_stok",
        "deskripsi",
        "kategori_produk_id"
    ];
    public $timestamps = false;

    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }
    public function getAllData()
    {
        $alldata = DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama AS nama_kategori')->get();
        return $alldata;
    }
}
