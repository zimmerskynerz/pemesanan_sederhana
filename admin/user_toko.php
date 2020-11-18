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
                            <h1>Data Karyawan Toko</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">user_toko</li>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPengguna">
                                <i class="fa fa-plus-square"></i> Tambah Karyawan Baru
                            </button><br><br>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr align="center" width="5%">
                                            <th>N0</th>
                                            <th>USERNAME</th>
                                            <th>NAMA PENGGUNA</th>
                                            <th>EMAIL</th>
                                            <th>NO TELEPON</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_tampil = "select * from tbl_user where status='ADA' and not level='KONSUMEN'";
                                        // Query untuk menampilkan semua data buku  
                                        $no = 1;
                                        $query_tampil = mysqli_query($conn, $sql_tampil);
                                        while ($data = mysqli_fetch_assoc($query_tampil)) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $no++; ?></td>
                                                <td align="center"><?= $data['username']; ?></td>
                                                <td align="center"><?= $data['nm_user']; ?></td>
                                                <td align="center"><?= $data['email']; ?></td>
                                                <td align="center"><a href="https://wa.me/62<?= $data['no_hp']; ?>" target="_blank"><?= $data['no_hp']; ?></a></td>
                                                <td align="center">
                                                    <a id="user_detail" data-toggle="modal" data-target="#detail_user" href="#" data-id="<?= $data['id_user']; ?>" data-username="<?= $data['username']; ?>" data-user="<?= $data['nm_user']; ?>" data-alamat="<?= $data['alamat']; ?>" data-no_hp="<?= $data['no_hp']; ?>" data-jabatan="<?= $data['level']; ?>" data-email="<?= $data['email']; ?>" data-pass="<?= $data['password']; ?>">
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