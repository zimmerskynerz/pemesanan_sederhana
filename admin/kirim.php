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
                            <h1>Data Pesanan Terkirim</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">status kirim</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr align="center">
                                            <th>N0</th>
                                            <th>KODE TRANSAKSI</th>
                                            <th>ATAS NAMA</th>
                                            <th>ALAMAT</th>
                                            <th>HARGA TOTAL</th>
                                            <th>STATUS BAYAR</th>
                                            <th>STATUS PENGERJAAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_tampil = "select *,DATE_FORMAT(B.tgl_transaksi, '%Y%m%d') as tgl_id from tbl_user as A INNER JOIN tbl_transaksi as B on A.id_user=B.id_user where B.status='KIRIM' or B.status='TERKIRIM'";
                                        // Query untuk menampilkan semua data buku  
                                        
                                        $no = 1;
                                        $query_tampil = mysqli_query($conn, $sql_tampil);
                                        while ($data = mysqli_fetch_assoc($query_tampil)) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $no++; ?></td>
                                                <td align="center">#<?= $data['tgl_id']; ?>0<?= $id_user; ?>000<?= $data['id_transaksi']; ?></td>
                                                <td align="center"><?= $data['nm_user']; ?></td>
                                                <td align="left"><?= $data['alamat']; ?></td>
                                                <td align="right"><?= $data['jml_harga']; ?>,-</td>
                                                <td align="center"><?php
                                                                    if ($data['bayar'] == 'PROSES') {
                                                                    ?>BELUM BAYAR<?php
                                                                                } else {
                                                                                    ?>SUDAH BAYAR<?php
                                                                                                }
                                                                                                    ?></td>
                                                <td align="center"><?php
                                                                    if ($data['bayar'] == 'PROSES') {
                                                                    ?>BELUM DIKERJAKAN<?php
                                                                                    } else {
                                                                                        ?><?= $data['status']; ?><?php
                                                                                                                }
                                                                                                                    ?></td>
                                                <td align="center">
                                                    <a href="detail?id_transaksi=<?= $data['id_transaksi']; ?>">
                                                        Detail</a>
                                                </td>
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
            <!-- /.content -->
        </div>
        <?php include '../include/footer_admin.php' ?>
</body>

</html>