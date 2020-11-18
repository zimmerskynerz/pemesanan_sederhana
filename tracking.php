<?php include 'include/header_member.php' ?>

<body>
    <?php include 'include/menu_member.php' ?>
    <?php
    $data_product = mysqli_query($conn, "select *, sum(A.harga) as ttl_hrg from rinci_transaksi as A INNER JOIN tbl_transaksi as B on A.id_transaksi=B.id_transaksi where B.id_user='$id_user' AND B.status='MENUNGGU'");
    $product = mysqli_fetch_array($data_product);
    ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Histori Pengerjaan Pesanan Anda!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr align="center">
                                        <th>N0</th>
                                        <th>TANGGAL PENGERJAAN</th>
                                        <th>KETERANGAN PENGERJAAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $id_transaksi = $_GET['id'];
                                    $sql_tampil = "SELECT *, date_format(`tgl_proses`, '%d %M %Y') as tgl_pengerjaan FROM `rinci_proses` WHERE `id_transaksi`='$id_transaksi' ORDER BY `tgl_proses`";
                                    // Query untuk menampilkan semua data buku  
                                    $no = 1;
                                    $query_tampil = mysqli_query($conn, $sql_tampil);
                                    while ($data = mysqli_fetch_assoc($query_tampil)) {
                                    ?>
                                        <tr>
                                            <td align="center"><?= $no++; ?></td>
                                            <td align="center"><?= $data['tgl_pengerjaan']; ?></td>
                                            <td align="left"><?= $data['ket_proses']; ?></td>
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
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->
    <?php include 'include/footer_member.php' ?>

</body>

</html>