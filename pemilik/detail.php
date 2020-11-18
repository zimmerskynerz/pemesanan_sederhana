<?php include '../include/header_pemilik.php' ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include '../include/menu_pemilik.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Pesanan Masuk</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-7">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr align="center">
                                            <th>N0</th>
                                            <th>KODE BARANG</th>
                                            <th>NAMA BARANG</th>
                                            <th>JUMLAH PESANAN</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $id_transaksi = $_GET['id_transaksi'];
                                        $sql_tampil = "select *,A.keterangan as ket_pesan from rinci_transaksi as A inner join tbl_barang as B ON A.kd_brg=B.kd_brg 
                                        inner join tbl_kategori as C on C.id_kategori=B.id_kategori
                                        where A.id_transaksi='$id_transaksi'";
                                        // Query untuk menampilkan semua data buku  
                                        $no = 1;
                                        $query_tampil = mysqli_query($conn, $sql_tampil);
                                        while ($data = mysqli_fetch_assoc($query_tampil)) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $no++; ?></td>
                                                <td align="center"><?= $data['id_kategori']; ?>00<?= $data['kd_brg']; ?></td>
                                                <td align="left"><?= $data['nm_brg']; ?></td>
                                                <td align="center"><?= $data['jml_beli']; ?></td>
                                                <td align="center"><?= $data['ket_pesan']; ?></td>
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
                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">
                            <div class="cart-page-heading">
                                <h5>Proses Pengerjaan</h5>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr align="center">
                                            <th>N0</th>
                                            <th>TANGGAL</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $id_transaksi = $_GET['id_transaksi'];
                                        $sql_tampil = "SELECT *, date_format(B.tgl_proses, '%d %M %Y') as tgl_nya FROM tbl_user as A INNER JOIN rinci_proses as B ON A.id_user=B.id_user WHERE B.id_transaksi='$id_transaksi' ORDER BY B.tgl_proses DESC";
                                        // Query untuk menampilkan semua data buku  
                                        $no = 1;
                                        $query_tampil = mysqli_query($conn, $sql_tampil);
                                        while ($data = mysqli_fetch_assoc($query_tampil)) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $no++; ?></td>
                                                <td align="center"><?= $data['tgl_nya']; ?></td>
                                                <td align="center"><?= $data['ket_proses']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <?php include '../include/footer_pemilik.php' ?>
</body>

</html>