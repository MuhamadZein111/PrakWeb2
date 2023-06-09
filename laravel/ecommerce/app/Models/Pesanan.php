<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "pesanan";
    protected $fillable = [
        "tanggal",
        "nama_pesanan",
        "alamat_pesanan",
        "no_hp",
        "email",
        "jumlah_pesanan",
        "deskripsi",
        "produk_id"
    ];
    public $timestamps = false;


    public function getAllData()
    {
        $alldata = DB::table('pesanan')
            ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
            ->select('pesanan.*', 'produk.nama AS nama_produk')->get();
        return $alldata;
    }
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
