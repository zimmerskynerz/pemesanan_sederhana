<!DOCTYPE HTML>
<html lang="en">
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="signup_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
</head>
<body class="body">
  <div class="login-page">
    <div class="form">
      <form enctype="multipart/form-data" method="post">
        <input type="text" name="username" id="username" placeholder="Username" />
        <input type="password" name="password" id="password" placeholder="Password" />
        <input type="text" name="nm_user" id="nm_user" placeholder="Nama Lengkap" />
                <input type="email" name="email" id="email" placeholder="email" />
        <input type="text" name="no_hp" id="no_hp" placeholder="No HP/Telepon/WA" />
        <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" />
        <button type="submit" name="daftarMember" value="daftarMember" id="daftarMember">DAFTAR MEMBER</button>
      </form>
      <form class="login-form">
        <button type="button" onclick="window.location.href='login_member'">SIGN IN</button>
      </form>
    </div>
  </div>
</body>
</html>
<?php if (isset($_POST['daftarMember'])) {
  include "include/koneksi.php";
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $nm_user    = $_POST['nm_user'];
  $email    = $_POST['email'];
  $alamat     = $_POST['alamat'];
  $no_hp      = $_POST['no_hp'];
  $query = "INSERT INTO tbl_user 
  VALUES ('', '$username', '$password', '$email', '$nm_user','$alamat', '$no_hp', 'KONSUMEN', 'ADA')";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel
  if ($sql) { ?>
    <script>
      alert("Berhasil Menambah Data");
      window.location.href = 'index.php';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Menambah Data");
      window.location.href = 'index.php';
    </script>
<?php  }
}
?>