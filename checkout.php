<?php include 'include/header_member.php' ?>

<body>
    <?php include 'include/menu_member.php' ?>
    <?php
    $data_product = mysqli_query($conn, "select *, sum(A.harga) as ttl_hrg from rinci_transaksi as A INNER JOIN tbl_transaksi as B on A.id_transaksi=B.id_transaksi where B.id_user='$id_user' AND B.status='MENUNGGU'");
    $product = mysqli_fetch_array($data_product);
    $id_transaksi = $product['id_transaksi'];
    $data_pesanan = mysqli_query($conn, "select count(*) as jml_barang from rinci_transaksi where id_transaksi='$id_transaksi'");
    $pesanan = mysqli_fetch_array($data_pesanan);
    ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Silahkan BAYAR PESANAN Anda!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ###ffffffffffffff## -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr align="center">
                                        <th>N0</th>
                                        <th>KODE</th>
                                        <th>HARGA</th>
                                        <th>JUMLAH</th>
                                        <th>TOTAL</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_tampil = "select * from rinci_transaksi as A INNER JOIN tbl_transaksi as B ON A.id_transaksi = B.id_transaksi 
                                    INNER JOIN tbl_barang as C ON A.kd_brg=C.kd_brg INNER JOIN tbl_kategori as D on D.id_kategori=C.id_kategori 
                                    where B.status='MENUNGGU' AND B.id_user='$id_user'";
                                    // Query untuk menampilkan semua data buku  
                                    $no = 1;
                                    $query_tampil = mysqli_query($conn, $sql_tampil);
                                    while ($data = mysqli_fetch_assoc($query_tampil)) {
                                    ?>
                                        <tr>
                                            <td align="center"><?= $no++; ?></td>
                                            <td align="center"><?= $data['id_kategori']; ?>00<?= $data['kd_brg']; ?></td>
                                            <td align="center"><?= $data['hrg_brg']; ?></td>
                                            <td align="center"><?= $data['jml_beli']; ?></td>
                                            <td align="left"><?= $data['harga']; ?>,-</td>
                                            <td align="center">
                                                <a id="keranjang_detail" data-toggle="modal" data-target="#detail_keranjang" href="#" data-id_transaksi="<?= $data['id_transaksi']; ?>" data-id_user="<?= $data['id_user']; ?>" data-kd_brg="<?= $data['kd_brg']; ?>" data-luas_akhir="<?= $data['jml_beli']; ?>">
                                                    <i class="fa fa-trash"> </i> Hapus</a>&nbsp;
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
                <?php if ($pesanan['jml_barang'] > 0) { ?>
                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">
                            <form method="POST" action="include/query_sql.php" enctype="multipart/form-data">
                                <div class="cart-page-heading">
                                    <h5>Total Pembayaran Anda</h5>
                                </div>

                                <ul class="order-details-form mb-4">
                                    <li><span>Ongkos Kirim</span> <span>Rp 100.000,-</span></li>
                                    <li><span>Pembayaran</span> <span>Rp <?= $product['ttl_hrg'] + 100000; ?>,-</span></li>
                                    <li><span>Kode Transaksi</span> <span>#<?= $tgl_ini = date('Ymd');
                                                                            $tgl_ini ?>0<?= $id_user ?>000<?= $product['id_transaksi']; ?></span></li>
                                </ul>
                                <input type="text" class="form-control" hidden id="id_transaksi" name="id_transaksi" value="<?= $product['id_transaksi']; ?>">
                                <input type="text" class="form-control" hidden id="jml_harga" name="jml_harga" value="<?= $product['ttl_hrg']; ?>">
                                <span>Tranfer Ke Bank Central Asia!</span>
                                <table>
                                    <tr>
                                        <td>Atas Nama </td>
                                        <td>: </td>
                                        <td>SAIFUL HUDA</td>
                                    </tr>
                                    <tr>
                                        <td>Nomer Rekening </td>
                                        <td>: </td>
                                        <td>2160741514</td>
                                    </tr>
                                </table><br>
                                <span>Setelah melakukan pembayaran, silahkan untuk upload bukti pembayaran pada menu status order!</span>
                                <br><br><button type="submit" name="bayarSekarang" id="bayarSekarang" class="btn btn-primary">Bayar Sekarang</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->
    <?php include 'include/footer_member.php' ?>

</body>

</html>