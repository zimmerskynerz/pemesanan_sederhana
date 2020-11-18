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
                            <h1>Data Kategori Toko</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">Kategori</li>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKategori">
                                <i class="fa fa-plus-square"></i> Tambah Kategori Baru
                            </button><br><br>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr align="center" width="5%">
                                            <th>N0</th>
                                            <th>KODE KATEGORI</th>
                                            <th>NAMA KATEGORI</th>
                                            <th>KETERANGAN KATEGORI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_tampil = "select * from tbl_kategori where status='ADA'";
                                        // Query untuk menampilkan semua data barang  
                                        $no = 1;
                                        $query_tampil = mysqli_query($conn, $sql_tampil);
                                        while ($data = mysqli_fetch_assoc($query_tampil)) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $no++; ?></td>
                                                <td align="center">00<?= $data['id_kategori']; ?></td>
                                                <td align="center"><?= $data['nm_kategori']; ?></td>
                                                <td align="center"><?= $data['keterangan']; ?></td>
                                                <td align="center">
                                                    <a id="kategori_detail" data-toggle="modal" data-target="#detail_kategori" href="#" data-id="<?= $data['id_kategori']; ?>" data-nm_kategori="<?= $data['nm_kategori']; ?>" data-keterangan="<?= $data['keterangan']; ?>">
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