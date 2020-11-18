<?php
require '../include/koneksi.php';
include('../include/session.php');
$result = mysqli_query($conn, "select * from tbl_user where username='$session_id'") or die('Error In Session');
$user = mysqli_fetch_array($result);
$result2 = mysqli_query($conn, "select * from tbl_user where level='PEMILIK'");
$user2 = mysqli_fetch_array($result2);
$tgl_ini = date('d F Y');
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
if ($bulan == 1) {
    $bulan2 = 'JANUARI';
} elseif ($bulan == 2) {
    $bulan2 = 'FEBRUARI';
} elseif ($bulan == 3) {
    $bulan2 = 'MARET';
} elseif ($bulan == 4) {
    $bulan2 = 'APRIL';
} elseif ($bulan == 5) {
    $bulan2 = 'MEI';
} elseif ($bulan == 6) {
    $bulan2 = 'JUNI';
} elseif ($bulan == 7) {
    $bulan2 = 'JULI';
} elseif ($bulan == 8) {
    $bulan2 = 'AGUSTUS';
} elseif ($bulan == 9) {
    $bulan2 = 'SEPTEMBER';
} elseif ($bulan == 10) {
    $bulan2 = 'OKTOBER';
} elseif ($bulan == 11) {
    $bulan2 = 'NOVEMBER';
} elseif ($bulan == 12) {
    $bulan2 = 'DESEMBER';
} else {
    $bulan2 = 'TIDAK ADA BULAN YANG DIPILIH';
}
$bulan   = $_POST['bulan'];
$tahun   = $_POST['tahun'];
$transaksi = mysqli_query($conn, "SELECT count(*) as jml_transaksi FROM tbl_transaksi WHERE month(tgl_transaksi)='$bulan' AND YEAR(tgl_transaksi)='$tahun' ");
$transaksi_jumlah = mysqli_fetch_array($transaksi);
$uang = mysqli_query($conn, "SELECT sum(jml_harga) as jml_harga FROM tbl_transaksi WHERE month(tgl_transaksi)='$bulan' AND YEAR(tgl_transaksi)='$tahun' ");
$jml_uang = mysqli_fetch_array($uang);
$f_proses = mysqli_query($conn, "SELECT count(*) as jml_proses FROM tbl_transaksi WHERE 
                month(tgl_transaksi)='$bulan' AND YEAR(tgl_transaksi)='$tahun' and status='PROSES'");
$proses = mysqli_fetch_array($f_proses);
$f_selesai = mysqli_query($conn, "SELECT count(*) as jml_selesai FROM tbl_transaksi WHERE 
                month(tgl_transaksi)='$bulan' AND YEAR(tgl_transaksi)='$tahun' and status='DIKIRIM'");
$selesai = mysqli_fetch_array($f_selesai);
$f_terkirim = mysqli_query($conn, "SELECT count(*) as jml_dikirim FROM tbl_transaksi WHERE 
                month(tgl_transaksi)='$bulan' AND YEAR(tgl_transaksi)='$tahun' and status='TERKIRIM'");
$terkirim = mysqli_fetch_array($f_terkirim);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan Transaksi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../include/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../include/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../include/assets/vendors/css/vendor.bundle.addons.css">
    <link href="../assets/vendors/dataTable/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../include/assets/css/style.css">
    <link rel="stylesheet" href="../include/assets/css/mystyle.css">
    <link rel="stylesheet" href="../include/assets/vendors/chosen-master/chosen.css">
    <link rel="stylesheet" href="../include/assets/jquery-ui/jquery-ui.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" href="../include/images/icons/favicon.ico" />
</head>

<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <style>
                hr {
                    display: block;
                    margin-top: 0.1em;
                    margin-bottom: 0.5em;
                    margin-left: auto;
                    margin-right: auto;
                    border-style: double;
                    border-width: 2px;
                }

                table,
                th,
                td {
                    padding: 8px 10px;
                }
            </style>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1 mb-2">
                                            <center>
                                                <table>
                                                    <tr>
                                                        <th><img src="../img/core-img/logobaru.png" style="padding-top: 12px;" width="100px" alt=""></th>
                                                        <th>
                                                            <h3>CV. INDTEK LANGGENG MULYA</h3>
                                                            <p>Jalan raya gebog - mayong no.27 blok rahayu Dr. Daren Kec.Nalumsari Kab.Jepara - jawa tengah.</p>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </center>
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <table>
                                        <tr>
                                            <td>Bulan Laporan</td>
                                            <td>:</td>
                                            <td><?= $bulan2; ?> <?= $tahun; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Transaksi</td>
                                            <td>:</td>
                                            <td><?= $transaksi_jumlah['jml_transaksi']; ?> Transaksi</td>
                                        </tr>
                                        <tr>
                                            <td>Transaksi Proses</td>
                                            <td>:</td>
                                            <td><?= $proses['jml_proses']; ?> Transaksi</td>
                                        </tr>
                                        <tr>
                                            <td>Transaksi Selesai</td>
                                            <td>:</td>
                                            <td><?= $terkirim['jml_dikirim']; ?> Transaksi</td>
                                        </tr>
                                    </table>
                                    <hr class="mb-4">
                                    <center>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Nama Pembeli</th>
                                                    <th>Kode Transaksi</th>
                                                    <th>Tanggal Transaksi</th>
                                                    <th>Tanggal Diterima</th>
                                                    <th>Jumlah Pembayaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $bulan   = $_POST['bulan'];
                                                $tahun   = $_POST['tahun'];
                                                $sql_tampil = "SELECT *, date_format(A.tgl_transaksi, '%d %M %Y') as tgl_transaksi, date_format(B.tgl_proses, '%d %M %Y') as tgl_proses FROM `tbl_transaksi` as A INNER JOIN tbl_user as C on A.id_user=C.id_user INNER JOIN rinci_proses as B on A.id_transaksi=B.id_transaksi WHERE A.status='TERKIRIM' AND B.ket_proses='TERKIRIM' AND month(A.tgl_transaksi)='$bulan' AND YEAR(A.tgl_transaksi)='$tahun' group by A.id_transaksi";
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
                                                        <td align="center"><?= $data['tgl_proses']; ?></td>
                                                        <td align="center"><?= $data['jml_harga'] + 100000; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </center>
                                    <hr class="mb-4">
                                    <table colspan="2" width="100%">
                                        <thead>
                                            <tr>
                                                <td align="right">Kudus, <?= $tgl_ini ?></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td align="right">CV. INDTEK LANGGENG MULYA</td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr colspan="3">
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td align="right"><?= $user['nm_user'] ?>,</td>
                                                <td align="right"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        window.print();
    </script>
    <!-- plugins:js -->
    <script src="../include/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../include/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../include/assets/js/off-canvas.js"></script>
    <script src="../include/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../include/assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="../include/assets/js/jquery-3.1.1.min.js"></script>
    <script src="../include/assets/vendors/chosen-master/chosen.jquery.js"></script>
    <script src="../include/assets/vendors/dataTable/jquery.dataTables.min.js"></script>
    <script src="../include/assets/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
    <script src="../include/assets/js/script.js"></script>
    <script src="../include/assets/js/panjar.js"></script>
    <script src="../include/assets/js/panjar2.js"></script>
    <script src="../include/assets/js/gugatan.js"></script>
    <script src="../include/assets/jquery-ui/jquery-ui.js"></script>
</body>

</html>