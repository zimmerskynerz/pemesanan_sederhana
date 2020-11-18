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
                            <h1>Data Barang Toko</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">Barang</li>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBarang">
                                <i class="fa fa-plus-square"></i> Tambah Barang Baru
                            </button><br><br>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr align="center" width="5%">
                                            <th>N0</th>
                                            <th>KODE BARANG</th>
                                            <th>NAMA BARANG</th>
                                            <th>HARGA BARANG</th>
                                            <th>KETERANGAN BARANG</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_tampil = "select * from tbl_kategori as A inner join tbl_barang as B
                                        on A.id_kategori = B.id_kategori where A.status='ADA' and B.status='TERSEDIA'";
                                        // Query untuk menampilkan semua data buku  
                                        $no = 1;
                                        $query_tampil = mysqli_query($conn, $sql_tampil);
                                        while ($data = mysqli_fetch_assoc($query_tampil)) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $no++; ?></td>
                                                <td align="center"><?= $data['id_kategori']; ?>00<?= $data['kd_brg']; ?></td>
                                                <td align="center"><?= $data['nm_brg']; ?></td>
                                                <td align="right"><?= $data['hrg_brg']; ?>,-</td>
                                                <td align="left"><?= $data['detail']; ?></td>
                                                <td align="center">
                                                    <a id="barang_detail" data-toggle="modal" data-target="#detail_barang" href="#" data-kd_brg="<?= $data['kd_brg']; ?>" data-kd_brg_id="<?= $data['id_kategori']; ?>00<?= $data['kd_brg']; ?>" data-id="<?= $data['id_kategori']; ?>" data-nm_brg="<?= $data['nm_brg']; ?>" data-hrg_brg="<?= $data['hrg_brg']; ?>" data-detail="<?= $data['detail']; ?>" data-foto="<?= $data['foto']; ?>">
                                                        <i class="fa fa-edit"> </i> Detail</a>&nbsp;
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