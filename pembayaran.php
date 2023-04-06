<?php
include_once('navbar.php');
include_once('sidebar.php');
require_once('dbkoneksi.php');
require_once('model/Pembayaran.php');

?>
<!--Ini untuk buka konten-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">pembayaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">pembayaran v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <?php
        $models = new Pembayaran();
        $rs = $models->tampilData();
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
                                        <th>No Kuitansi</th>
                                        <th>Tanggal</th>
                                        <th>jumlah</th>
                                        <th>Ke</th>
                                        <th>Pesanan ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($rs as $row) {
                                        echo '<tr>';
                                        echo '<td>' . $no++ . '</td>';
                                        echo '<td>' . $row['nokuitansi'] . '</td>';
                                        echo '<td>' . date('d F Y', strtotime($row['tanggal'])) . '</td>';
                                        echo '<td>' . $row['jumlah'] . '</td>';
                                        echo '<td>' . $row['ke'] . '</td>';
                                        echo '<td>' . $row['pesanan_id'] . '</td>';
                                        echo '</tr>';
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