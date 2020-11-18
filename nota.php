<?php
include('include/koneksi.php');
include('include/session.php');

$id_transaksi = $_GET['id_transaksi'];

$data_transaksi = mysqli_query($conn, "select * from tbl_transaksi where id_transaksi='$id_transaksi'");
$transaksi = mysqli_fetch_array($data_transaksi);
$id_user = $transaksi['id_user'];
$identitas = mysqli_query($conn, "select * from tbl_user where id_user='$id_user'");
$profil = mysqli_fetch_array($identitas);
// var_dump($id_user);
// die;

?>
<script language=javascript>
    function printWindow() {
        bV = parseInt(navigator.appVersion);
        if (bV >= 4) window.print();
    }
    printWindow();
</script>
<table>
    <thead>
        <tr>
            <td>
                <a style="font-family: arial; font-size: 15px;">CV. INDTEK LANGGENG MULYA</a><br>
                <a style="font-family: arial; font-size: 8px;">jln. gebog - mayong no.27 blok rahayu, Ds. Daren Kec.Nalumsari, Kab. Jepara - jawa tengah</a><br>
                <a style="font-family: arial; font-size: 8px;">Telp : 0291-4251983|| 08122838576</a><br>
                <a style="font-family: arial; font-size: 8px;">Website : www.indteklanggeng.com</a><br>
            </td>
            <td>
                <a style="font-family: arial; font-size: 10px;">Kudus, <?php echo date('l, d-M-Y'); ?></a><br>
                <a style="font-family: arial; font-size: 8px;">Kepada Yth.</a><br>
                <a style="font-family: arial; font-size: 8px;">Customers, <?php echo $profil['nm_user']; ?></a><br>
                <a style="font-family: arial; font-size: 8px;">Pembayaran, LUNAS;</a><br>
            </td>
        </tr>
    </thead>
</table>
<td colspan="2">
    <a style="font-family: arial;  padding-top: 10px; padding-bottom: 10px" colspan="2">==================================================</a>
</td>
</tr>
</thead>
<tbody>
    <table width="500">
        <tr>
            <th style="font-family: arial; text-align: left;  font-size: 12px;">Kode Barang</th>
            <th style="font-family: arial; text-align: left;  font-size: 12px;">Nama Barang</th>
            <th style="font-family: arial; text-align: left;  font-size: 12px;">Jumlah</th>
            <th style="font-family: arial; text-align: left;  font-size: 12px;">Harga</th>
            <th style="font-family: arial; text-align: left;  font-size: 12px;">Total Harga</th>
        </tr>
        <?php
        $id_transaksi = $_GET['id_transaksi'];
        $sql_tampil = "select * from rinci_transaksi as A join tbl_barang as B on A.kd_brg=B.kd_brg where A.id_transaksi=$id_transaksi";

        // Query untuk menampilkan semua data buku  
        $query_tampil = mysqli_query($conn, $sql_tampil);
        while ($data = mysqli_fetch_assoc($query_tampil)) {
        ?>
            <tr>
                <td><a style="font-family: arial; text-align: left;  font-size: 10px;"><?= $data['kd_brg'] ?></a></td>
                <td><a style="font-family: arial; text-align: left;  font-size: 10px;"><?= $data['nm_brg'] ?></a></td>
                <td><a style="font-family: arial; text-align: center;  font-size: 10px;"><?= $data['jml_beli'] ?></a></td>
                <td><a style="font-family: arial; text-align: left;  font-size: 10px;"><?= $data['harga'] ?></a></td>
                <td><a style="font-family: arial; text-align: left;  font-size: 10px;"><?= $data['harga'] * $data['jml_beli'] ?></a></td>
            </tr>

        <?php

        }
        ?>
    </table>
    <tr>
        <td colspan="2">
            <a style="font-family: arial;  padding-top: 10px; padding-bottom: 10px" colspan="2">==================================================</a>
        </td>
    </tr>
    <table>
        <td>
            <tr>
                <td><a style="font-family: arial; text-align: left;  font-size: 10px;">TOTAL HARGA</a></td>
                <td><a style="font-family: arial; text-align: left;  font-size: 10px;">:</a></td>
                <td><a style="font-family: arial; text-align: left;  font-size: 10px;"><?= $transaksi['jml_harga'] ?></a></td>
            </tr>
            </tr>
        </td>
    </table>
    <table>
        <thead>
            <tr>
                <td colspan="2">
                    <a style="font-family: arial;  padding-top: 10px; padding-bottom: 10px" colspan="2">==================================================</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a style="font-family: arial; font-size: 10px;">Kirim,</a><br>
                    <a style="font-family: arial; font-size: 10px;">Kepada <?php echo $profil['nm_user']; ?>; Nomer Telepon : <?php echo $profil['no_hp']; ?></a><br>
                    <a style="font-family: arial; font-size: 10px;">Alamat, <?php echo $profil['alamat']; ?></a><br>

                </td>
            </tr>
        </thead>
    </table>