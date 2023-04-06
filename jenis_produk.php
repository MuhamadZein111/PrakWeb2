<?php
include_once('navbar.php');
include_once('sidebar.php');
require_once('dbkoneksi.php');
require_once('model/JenisProduk.php');

?>
<!--Ini untuk buka konten-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Jenis Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jenis Produk v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <?php
        $models = new JenisProduk();
        $data_jenisProduk = $models->tampilData();
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
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_jenisProduk as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama'] ?></td>
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