<?php
class Pembelian
{

    private $koneksi;

    public function __construct()
    {
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampilData()
    {
        $sql = 'SELECT *, produk.nama AS produk, vendor.nama AS nama FROM pembelian INNER JOIN vendor ON vendor.id = pembelian.vendor_id INNER JOIN produk ON produk.id = pembelian.produk_id';
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $data = $ps->fetchAll();
        return $data;
    }
}
