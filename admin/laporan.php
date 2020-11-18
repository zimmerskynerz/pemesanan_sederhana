<?php include '../include/header_admin.php' ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include '../include/menu_admin.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Laporan Pesanan</h1>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#laporanNew">
                                Lihat Laporan
                            </button>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">laporan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <?php if (isset($_POST['laporanLihat'])) { ?>
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Nama Pembeli</th>
                                                <th>Kode Transaksi</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Jumlah Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $bulan   = $_POST['bulan'];
                                            $tahun   = $_POST['tahun'];
                                            $sql_tampil = "SELECT *, date_format(A.tgl_transaksi, '%d %M %Y') as tgl_transaksi FROM `tbl_transaksi` as A INNER JOIN tbl_user as B on A.id_user=B.id_user WHERE A.status='TERKIRIM' AND month(A.tgl_transaksi)='$bulan' AND YEAR(A.tgl_transaksi)='$tahun' group by A.id_transaksi";
                                            // Query untuk menampilkan semua data buku  
                                            $no = 1;
                                            $query_tampil = mysqli_query($conn, $sql_tampil);
                                            while ($data = mysqli_fetch_assoc($query_tampil)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['nm_user']; ?></td>
                                                    <td align="center">#<?= $tgl_ini = date('Ymd');
                                                                        $tgl_ini ?>0<?= $data['id_user'] ?>000<?= $data['id_transaksi']; ?></td>
                                                    <td align="center"><?= $data['tgl_transaksi']; ?></td>
                                                    <td align="center"><?= $data['jml_harga'] + 100000; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            <?php } else { ?>
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Nama Pembeli</th>
                                                <th>Kode Transaksi</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Jumlah Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td></td>
                                                <td <td align="center"></td>
                                                <td align="center"></td>
                                                <td align="center"></td>
                                                <td align="center"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            <?php } ?>
            <!-- /.content -->
        </div>
        <?php include '../include/footer_admin.php' ?>
</body>

</html>