<?php
include('../include/koneksi.php');
include('../include/session.php');
$result = mysqli_query($conn, "select * from tbl_user where username='$session_id'") or die('Error In Session');
$data = mysqli_fetch_array($result);
$id_user = $data['id_user'];
?>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Menu Gudang</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="../include/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../include/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../include/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../include/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">