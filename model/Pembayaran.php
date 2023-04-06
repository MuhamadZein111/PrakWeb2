<?php
class Pembayaran
{

    private $koneksi;

    public function __construct()
    {
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampilData()
    {
        $sql = 'SELECT * FROM pembayaran';
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $data = $ps->fetchAll();
        return $data;
    }
}
