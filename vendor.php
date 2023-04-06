<?php
include_once('navbar.php');
include_once('sidebar.php');
require_once('dbkoneksi.php');
require_once('model/Vendor.php');

?>
<!--Ini untuk buka konten-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Vendor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Vendor v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <?php
        $models = new Vendor();
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
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>Kota</th>
                                        <th>Kontak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($rs as $row) {
                                        echo '<tr>';
                                        echo '<td>' . $no++ . '</td>';
                                        echo '<td>' . $row['nomor'] . '</td>';
                                        echo '<td>' . $row['nama'] . '</td>';
                                        echo '<td>' . $row['kota'] . '</td>';
                                        echo '<td>' . $row['kontak'] . '</td>';
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