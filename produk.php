<?php
include_once('navbar.php');
include_once('sidebar.php');
require_once('dbkoneksi.php');
require_once('model/Produk.php');

?>
<!--Ini untuk buka konten-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <?php
        $models = new Produk();
        $data_produk = $models->tampilProduk();
        ?>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Stok</th>
                                        <th>Min Stok</th>
                                        <th>Jenis Produk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_produk as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode'] ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['harga_beli'] ?></td>
                                            <td><?= $row['harga_jual'] ?></td>
                                            <td><?= $row['stok'] ?></td>
                                            <td><?= $row['min_stok'] ?></td>
                                            <td><?= $row['jenis_produk_id'] ?></td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                    </tbdody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Ini untuk tutup konten-->

<?php
include_once('footer.php');
?>