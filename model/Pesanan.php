<?php
class Pesanan
{

    private $koneksi;

    public function __construct()
    {
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampilData()
    {
        $sql = 'SELECT * FROM pesanan INNER JOIN pelanggan ON pelanggan.id = pesanan.pelanggan_id';
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $data = $ps->fetchAll();
        return $data;
    }
}
