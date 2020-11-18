<?php 
include('include/koneksi.php');
$result = mysqli_query($conn, "select count(*) as jml_product from tbl_barang where status='tersedia'");
$data = mysqli_fetch_array($result);
$jml_product = $data['jml_product'];
$keranjang_jml = mysqli_query($conn, "select count(*) as jml from rinci_transaksi as A INNER JOIN tbl_transaksi as B ON A.id_transaksi = B.id_transaksi where B.status='MENUNGGU'");
$keranjang = mysqli_fetch_array($keranjang_jml);
$jml_product = $data['jml_product'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- DataTables -->
    <link rel="stylesheet" href="include/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="include/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- Title  -->
    <title>SISFO PEMESANAN FURNITURE ONLINE</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
</head>