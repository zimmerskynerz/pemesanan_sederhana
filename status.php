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
                        <h2>Silahkan Bayar dan upload bukti transaksi disini!</h2>
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
                                        <th>KODE TRANSAKSI</th>
                                        <th>TANGGAL PESAN</th>
                                        <th>ALAMAT</th>
                                        <th>HARGA TOTAL</th>
                                        <th>STATUS BAYAR</th>
                                        <th>STATUS PENGERJAAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_tampil = "select *,DATE_FORMAT(B.tgl_transaksi, '%Y%m%d') as tgl_id, DATE_FORMAT(B.tgl_transaksi, '%d %M %Y') as tgl_pesan from tbl_user as A INNER JOIN tbl_transaksi as B on A.id_user=B.id_user where A.id_user='$id_user' and not B.status='MENUNGGU'";
                                    // Query untuk menampilkan semua data buku  
                                    $no = 1;
                                    $query_tampil = mysqli_query($conn, $sql_tampil);
                                    while ($data = mysqli_fetch_assoc($query_tampil)) {
                                    ?>
                                        <tr>
                                            <td align="center"><?= $no++; ?></td>
                                            <td align="center">#<?= $data['tgl_id']; ?>0<?= $id_user; ?>000<?= $data['id_transaksi']; ?></td>
                                            <td align="center">
                                                <?php if ($data['tgl_transaksi'] == '0000-00-00') {
                                                    echo 'Transaksi Belum Selesai';
                                                } else { ?>
                                                    <?= $data['tgl_pesan']; ?>
                                                <?php } ?>
                                            </td>
                                            <td align="left"><?= $data['alamat']; ?></td>
                                            <td align="right"><?= $data['jml_harga'] + 100000; ?>,-</td>
                                            <td align="center"><?php
                                                                if ($data['bayar'] == 'PROSES') {
                                                                ?>BELUM BAYAR<?php
                                                                            } else {
                                                                                ?>SUDAH BAYAR<?php
                                                                                            }
                                                                                                ?></td>
                                            <td align="center"><?php
                                                                if ($data['bayar'] == 'PROSES') { ?>
                                                    UPLOAD BUKTI
                                                <?php } elseif ($data['status'] == 'DITERIMA') { ?>
                                                    Sedang Dikerjakan
                                                <?php } else { ?>
                                                    <?= $data['status']; ?>
                                                <?php } ?>
                                            </td>
                                            <td align="center">
                                                <?php if ($data['status'] == 'KONFIRMASI') {
                                                } elseif ($data['status'] == 'DITERIMA') { ?>
                                                    <a href="tracking?id=<?= $data['id_transaksi']; ?>">
                                                        Tracking</a>
                                                <?php } elseif ($data['status'] == 'DIKIRIM') { ?>
                                                    <a id="upload_detail" data-toggle="modal" data-target="#terima_barang" href="#" data-id_transaksi="<?= $data['id_transaksi']; ?>">
                                                        Terima
                                                    </a>
                                                <?php } elseif ($data['status'] == 'TERKIRIM') { ?>
                                                    <a href="nota.php?id_transaksi=<?= $data['id_transaksi'] ?>" target="_BLANK">Nota</a>
                                                <?php } else { ?>
                                                    <a id="upload_detail" data-toggle="modal" data-target="#detail_upload" href="#" data-id_transaksi="<?= $data['id_transaksi']; ?>">
                                                        Upload
                                                    </a>
                                                <?php } ?>

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
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->
    <?php include 'include/footer_member.php' ?>

</body>

</html>