<!-- model dalam mvc berfungsi sebagai otak dari aplikasi karena memproses data dan aturan bisnis yang terkait dengan database -->
<?php
class Produk
{

    private $koneksi;

    public function __construct()
    {
        // sebuah function yang di jalankan awalan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampilProduk()
    {
        // select semua kolom yang ada di dalam table produk
        $sql = "SELECT * FROM produk";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        //eksekusi data select yang sudah di siapkan menggunakan method prepare
        // menggunakan method execute
        $ps->execute();
        // simpan data sql yang  sudah di eksekusi ke dalam data array
        // menggunakan method fetchall
        $data = $ps->fetchAll();
        // kembalikan data produk dalam bentuk data array yang sudah 
        // disimpan ke dalam variable $data;
        return $data;
    }
    public function addProduk($kode, $nama, $harga_beli, $harga_jual, $stok, $min_stok, $jenis_produk_id)
    {
        try {
            $sql = "INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) VALUES (:kode, :nama, :harga_beli, :harga_jual, :stok, :min_stok, :jenis_produk_id)";
            $ps = $this->koneksi->prepare($sql);
            $ps->bindParam(':kode', $kode);
            $ps->bindParam(':nama', $nama);
            $ps->bindParam(':harga_beli', $harga_beli);
            $ps->bindParam(':harga_jual', $harga_jual);
            $ps->bindParam(':stok', $stok);
            $ps->bindParam(':min_stok', $min_stok);
            $ps->bindParam(':jenis_produk_id', $jenis_produk_id);
            $ps->execute();
            echo '<script>alert("Data berhasil ditambah");</script>';
            echo '<meta http-equiv="refresh" content="0; url=produk.php">';
            return true;
        } catch (PDOException $e) {
            // tangani kesalahan jika terjadi
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function deleteProduk($id)
    {
        $sql = "DELETE FROM produk WHERE id = '$id'";
        try {
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            echo '<script>alert("Data berhasil dihapus");</script>';
            echo '<meta http-equiv="refresh" content="0; url=produk.php">';
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
