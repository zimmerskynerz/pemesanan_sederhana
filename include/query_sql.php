<?php if (isset($_POST['simpanPengguna'])) {
  include "koneksi.php";
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $email      = $_POST['email'];
  $nm_user    = $_POST['nm_user'];
  $alamat     = $_POST['alamat'];
  $no_hp      = $_POST['no_hp'];
  $level      = $_POST['jabatan'];

  $query = "INSERT INTO tbl_user 
  VALUES ('', '$username', '$password', '$email', '$nm_user','$alamat', '$no_hp', '$level', 'ADA')";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Menambah Data");
      window.location.href = '../admin/user_toko';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Menambah Data");
      window.location.href = '../admin/user_toko';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['editPengguna'])) {
  include "koneksi.php";
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $email      = $_POST['email'];
  $nm_user    = $_POST['nm_user'];
  $alamat     = $_POST['alamat'];
  $no_hp      = $_POST['no_hp'];
  $level      = $_POST['jabatan'];

  $query = "UPDATE `tbl_user` SET `password`='$password',`email`='$email',`nm_user`='$nm_user',`alamat`='$alamat',`no_hp`='$no_hp',`level`='$level' WHERE `username`= '$username'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Merubah Data");
      window.location.href = '../admin/user_toko';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Merubah Data");
      window.location.href = '../admin/user_toko';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['hapusPengguna'])) {
  include "koneksi.php";
  $username   = $_POST['username'];

  $query = "UPDATE `tbl_user` SET `status`='HAPUS' WHERE `username`= '$username'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Menghapus Data");
      window.location.href = '../admin/user_toko';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Menghapus Data");
      window.location.href = '../admin/user_toko';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['simpanMember'])) {
  include "koneksi.php";
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $email      = $_POST['email'];
  $nm_user    = $_POST['nm_user'];
  $tgl_lahir  = $_POST['tgl_lahir'];
  $alamat     = $_POST['alamat'];
  $no_hp      = $_POST['no_hp'];

  $query = "INSERT INTO tbl_user 
  VALUES ('', '$username', '$password', '$email', '$nm_user', '$tgl_lahir','$alamat', '$no_hp', 'MEMBER', 'ADA')";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Menambah Data");
      window.location.href = '../admin/member_toko';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Menambah Data");
      window.location.href = '../admin/member_toko';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['editPenggunaMember'])) {
  include "koneksi.php";
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $email      = $_POST['email'];
  $nm_user    = $_POST['nm_user'];
  $alamat     = $_POST['alamat'];
  $no_hp      = $_POST['no_hp'];

  $query = "UPDATE `tbl_user` SET `password`='$password',`email`='$email',`nm_user`='$nm_user',`alamat`='$alamat',`no_hp`='$no_hp' WHERE `username`= '$username'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Merubah Data");
      window.location.href = '../admin/member_toko';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Merubah Data");
      window.location.href = '../admin/member_toko';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['hapusPenggunaMember'])) {
  include "koneksi.php";
  $username   = $_POST['username'];

  $query = "UPDATE `tbl_user` SET `status`='HAPUS' WHERE `username`= '$username'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Menghapus Data");
      window.location.href = '../admin/member_toko';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Menghapus Data");
      window.location.href = '../admin/member_toko';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['simpanKategori'])) {
  include "koneksi.php";
  $nm_kategori   = $_POST['nm_kategori'];
  $ket        = $_POST['ket'];

  $query = "INSERT INTO tbl_kategori 
  VALUES ('', '$nm_kategori', '$ket', 'ADA')";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Menambah Data");
      window.location.href = '../admin/kategori';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Menambah Data");
      window.location.href = '../admin/kategori';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['editKategori'])) {
  include "koneksi.php";
  $id_kategori   = $_POST['id_kategori'];
  $nm_kategori   = $_POST['nm_kategori'];
  $ket        = $_POST['ket'];

  $query = "UPDATE `tbl_kategori` SET `nm_kategori`='$nm_kategori',`keterangan`='$ket' WHERE `id_kategori`='$id_kategori'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Merubah Data");
      window.location.href = '../admin/kategori';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Merubah Data");
      window.location.href = '../admin/kategori';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['hapusKategori'])) {
  include "koneksi.php";
  $id_kategori   = $_POST['id_kategori'];

  $query = "UPDATE `tbl_kategori` SET `status`='HAPUS' WHERE `id_kategori`='$id_kategori'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Menghapus Data");
      window.location.href = '../admin/kategori';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Menghapus Data");
      window.location.href = '../admin/kategori';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['simpanBarang'])) {
  include "koneksi.php";
  $id_kategori   = $_POST['id_kategori'];
  $nm_brg      = $_POST['nm_brg'];
  $hrg_brg      = $_POST['hrg_brg'];
  $detail       = $_POST['ket'];
  $tgl_ini     = date('Y-m-d');
  //cek apakah gambar pertama ada?
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis') . $foto;
  // Set folder tempat menyimpan fotonya 
  $path = "../img/product-img/" . $fotobaru;
  if (move_uploaded_file($tmp, $path)) {
    // Insert laporan kejadian kedalam rbl_lapor
    $query = "INSERT INTO tbl_barang VALUES(
		'" . $id_kategori . "',
		'',
		'" . $nm_brg . "',
		'" . $hrg_brg . "',
		'" . $detail . "',
		'" . $fotobaru . "',
		'TERSEDIA')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
?>
      <script>
        alert("Data Berhasil Disimpan");
        window.location.href = '../admin/barang';
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Data Gagal Disimpan");
        window.location.href = '../admin/barang';
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("TIdak Ada Foto");
      window.location.href = '../admin/barang';
    </script>
<?php
  }
}
?>

<?php if (isset($_POST['editbarang'])) {
  include "koneksi.php";
  $kd_brg      = $_POST['kd_brg'];
  $id_kategori   = $_POST['id_kategori'];
  $nm_brg      = $_POST['nm_brg'];
  $hrg_brg      = $_POST['hrg_brg'];
  $detail       = $_POST['ket'];
  $tgl_ini     = date('Y-m-d');
  //cek apakah gambar pertama ada?
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis') . $foto;
  // Set folder tempat menyimpan fotonya 
  $path = "../img/product-img/" . $fotobaru;
  if (move_uploaded_file($tmp, $path)) {
    // Insert laporan kejadian kedalam rbl_lapor
    $query = "UPDATE `tbl_barang` SET `id_kategori`='$id_kategori',`nm_brg`='$nm_brg',`hrg_brg`='$hrg_brg',`detail`='$detail',`foto`='$fotobaru' WHERE `kd_brg`='$kd_brg'";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
?>
      <script>
        alert("Data Berhasil Diubah");
        window.location.href = '../admin/barang';
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Data Gagal Diubah");
        window.location.href = '../admin/barang';
      </script>
    <?php
    }
  } else {
    $query = "UPDATE `tbl_barang` SET `id_kategori`='$id_kategori',`nm_brg`='$nm_brg',`hrg_brg`='$hrg_brg',`detail`='$detail' WHERE `kd_brg`='$kd_brg'";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
    ?>
      <script>
        alert("Data Berhasil Diubah");
        window.location.href = '../admin/barang';
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Data Gagal Diubah");
        window.location.href = '../admin/barang';
      </script>
<?php
    }
  }
}
?>

<?php if (isset($_POST['hapusBarang'])) {
  include "koneksi.php";
  $kd_brg      = $_POST['kd_brg'];
  $tgl_ini     = date('Y-m-d');
  // Insert laporan kejadian kedalam rbl_lapor
  $query = "UPDATE `tbl_barang` SET status='KOSONG' WHERE `kd_brg`='$kd_brg'";
  $sql = mysqli_query($conn, $query);
  if ($sql) {
?>
    <script>
      alert("Data Berhasil Dihapus");
      window.location.href = '../admin/barang';
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Data Gagal Dihapus");
      window.location.href = '../admin/barang';
    </script>
<?php
  }
}
?>

<?php if (isset($_POST['beliProduct'])) {
  include "koneksi.php";
  //data sudah ada di dalam form
  $id_user     = $_POST['id_user'];
  $kd_brg      = $_POST['kd_brg'];
  $hrg_brg     = $_POST['hrg_brg'];
  $jml_beli    = $_POST['jml_beli'];
  $ket_lain    = $_POST['ket_lain'];
  //data rujukan harga total
  $lebar       = $_POST['lebar'];
  $panjang     = $_POST['panjang'];
  $tinggi      = $_POST['tinggi'];
  $harga_total = $harga_luas * $jml_beli;
  //cek apakah ada keranjang transaksi
  $query_cek = mysqli_query($conn, "select * from tbl_transaksi where id_user='$id_user' and status='MENUNGGU'");
  $transaksi = mysqli_fetch_array($query_cek);
  if ($transaksi > 0) {
    $id_transaksi = $transaksi['id_transaksi'];
    $query = "INSERT INTO rinci_transaksi VALUES 
	('$id_transaksi',
	 '$kd_brg',
	 '$luas_total',
	 '$harga_total',
	 '$jml_beli',
	 '$ket_lain T : $tingi L : $lebar P : $panjang')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
?>
      <script>
        alert("Berhasil Menambah Data");
        window.location.href = '../shop';
      </script>
    <?php } else { ?>
      <script>
        alert("Gagal Menambah Data1");
        window.location.href = '../shop';
      </script>
      <?php  }
  } else {
    $query = "INSERT INTO tbl_transaksi VALUES 
	('',
	 '',
	 '',
	 'PROSES',
	 'MENUNGGU',
	 '',
	 '$id_user')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
      $query_cek = mysqli_query($conn, "select * from tbl_transaksi where id_user='$id_user' and status='MENUNGGU'");
      $transaksi = mysqli_fetch_array($query_cek);
      if ($transaksi > 0) {
        $id_transaksi = $transaksi['id_transaksi'];
        $query = "INSERT INTO rinci_transaksi VALUES 
		('$id_transaksi',
		'$kd_brg',
		'$luas_total',
		'$harga_total',
		'$jml_beli',
		'$ket_lain')";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
      ?>
          <script>
            alert("Berhasil Menambah Data");
            window.location.href = '../shop';
          </script>
        <?php } else { ?>
          <script>
            alert("Gagal Menambah Data9");
            window.location.href = '../shop';
          </script>
        <?php  }
      } else {
        ?>
        <script>
          alert("GAGAL Menambah Data10");
          window.location.href = '../shop';
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        alert("GAGAL Menambah Data2");
        window.location.href = '../shop';
      </script>
<?php }
  }
}
?>

<?php if (isset($_POST['beliProductOri'])) {
  include "koneksi.php";
  //data sudah ada di dalam form
  $id_user     = $_POST['id_user'];
  $kd_brg      = $_POST['kd_brg'];
  $hrg_brg     = $_POST['hrg_brg'];
  $jml_beli    = $_POST['jml_beli'];
  $hrg_ttl     = $jml_beli * $hrg_brg;
  $ket_lain    = $_POST['ket_lain'];

  if ($jml_beli == NULL or $jml_beli == 0) {
?>
    <script>
      alert("Masukkan Jumlah Barang lebih dari nol");
    </script>
    <?php
  } else {

    //cek apakah ada keranjang transaksi
    $query_cek = mysqli_query($conn, "select * from tbl_transaksi where id_user='$id_user' and status='MENUNGGU'");
    $transaksi = mysqli_fetch_array($query_cek);
    if ($transaksi > 0) {
      $id_transaksi = $transaksi['id_transaksi'];
      $query = "INSERT INTO rinci_transaksi VALUES 
	('$id_transaksi',
	 '$kd_brg',
	 '$hrg_ttl',
	 '$jml_beli',
	 '$ket_lain')";
      $sql = mysqli_query($conn, $query);
      if ($sql) {
    ?>
        <script>
          alert("Berhasil Menambah Data");
          window.location.href = '../shop';
        </script>
      <?php } else { ?>
        <script>
          alert("Gagal Menambah Data1");
          window.location.href = '../shop';
        </script>
        <?php  }
    } else {
      $query = "INSERT INTO tbl_transaksi VALUES 
	('',
	 '',
	 '',
	 'PROSES',
	 'MENUNGGU',
	 '',
	 '$id_user')";
      $sql = mysqli_query($conn, $query);
      if ($sql) {
        $query_cek = mysqli_query($conn, "select * from tbl_transaksi where id_user='$id_user' and status='MENUNGGU'");
        $transaksi = mysqli_fetch_array($query_cek);
        if ($transaksi > 0) {
          $id_transaksi = $transaksi['id_transaksi'];
          $query = "INSERT INTO rinci_transaksi VALUES 
	('$id_transaksi',
	 '$kd_brg',
	 '$hrg_ttl',
	 '$jml_beli',
	 '$ket_lain')";
          $sql = mysqli_query($conn, $query);
          if ($sql) {
        ?>
            <script>
              alert("Berhasil Menambah Data");
              window.location.href = '../shop';
            </script>
          <?php } else { ?>
            <script>
              alert("Gagal Menambah Data9");
              window.location.href = '../shop';
            </script>
          <?php  }
        } else {
          ?>
          <script>
            alert("GAGAL Menambah Data10");
            window.location.href = '../shop';
          </script>
        <?php
        }
      } else {
        ?>
        <script>
          alert("GAGAL Menambah Data2");
          window.location.href = '../shop';
        </script>
<?php }
    }
  }
}
?>

<?php if (isset($_POST['hapusPesanan'])) {
  include "koneksi.php";
  $id_transaksi      = $_POST['id_transaksi'];
  $kd_brg         = $_POST['kd_brg'];
  // Insert laporan kejadian kedalam rbl_lapor
  $query = "DELETE FROM `rinci_transaksi` WHERE `id_transaksi`='$id_transaksi' AND `kd_brg`='$kd_brg'";
  $sql = mysqli_query($conn, $query);
  if ($sql) {
?>
    <script>
      alert("Data Berhasil Dihapus");
      window.location.href = '../checkout';
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Data Gagal Dihapus");
      window.location.href = '../checkout';
    </script>
<?php
  }
}
?>

<?php if (isset($_POST['bayarSekarang'])) {
  include "koneksi.php";
  $id_transaksi      = $_POST['id_transaksi'];
  $tgl_hari        = date('Y-m-d');
  $jml_harga      = $_POST['jml_harga'];
  // Insert laporan kejadian kedalam rbl_lapor
  $query = "UPDATE `tbl_transaksi` SET `tgl_transaksi`='$tgl_hari',`jml_harga`='$jml_harga',`bayar`='PROSES',`status`='PROSES' WHERE `id_transaksi`='$id_transaksi'";
  $sql = mysqli_query($conn, $query);
  if ($sql) {
?>
    <script>
      alert("Silahkan Membayar dan Upload di Status Order");
      window.location.href = '../status';
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Data Gagal Dihapus");
      window.location.href = '../checkout';
    </script>
<?php
  }
}
?>

<?php if (isset($_POST['uploadBukti'])) {
  include "koneksi.php";
  $id_transaksi = $_POST['id_transaksi'];
  //cek apakah gambar pertama ada?
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis') . $foto;
  // Set folder tempat menyimpan fotonya 
  $path = "../img/bukti/" . $fotobaru;
  if (move_uploaded_file($tmp, $path)) {
    // Insert laporan kejadian kedalam rbl_lapor
    $query = "UPDATE `tbl_transaksi` SET `foto`='$fotobaru', bayar='LUNAS', status='KONFIRMASI' WHERE `id_transaksi`='$id_transaksi'";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
?>
      <script>
        alert("Data Berhasil Diupload");
        window.location.href = '../status';
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Data Gagal Diupload");
        window.location.href = '../status';
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("TIdak Ada Foto");
      window.location.href = '../status';
    </script>
<?php
  }
}
?>

<?php if (isset($_POST['terimaKonfirmasi'])) {
  include "koneksi.php";
  $id_transaksi = $_POST['id_transaksi'];
  //cek apakah gambar pertama ada?
  $query = "UPDATE `tbl_transaksi` SET status='DITERIMA' WHERE `id_transaksi`='$id_transaksi'";
  $sql = mysqli_query($conn, $query);
  if ($sql) {
?>
    <script>
      alert("Data Berhasil Dikonfirmasi");
      window.location.href = '../admin/index';
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Data Gagal Dikonfirmasi");
      window.location.href = '../admin/index';
    </script>
<?php
  }
}
?>

<?php if (isset($_POST['tolajKonfirmasi'])) {
  include "koneksi.php";
  $id_transaksi = $_POST['id_transaksi'];
  //cek apakah gambar pertama ada?
  $query = "UPDATE `tbl_transaksi` SET bayar='PALSU', status='GAGAL' WHERE `id_transaksi`='$id_transaksi'";
  $sql = mysqli_query($conn, $query);
  if ($sql) {
?>
    <script>
      alert("Data Berhasil Dikonfirmasi");
      window.location.href = '../admin/index';
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Data Gagal Dikonfirmasi");
      window.location.href = '../admin/index';
    </script>
<?php
  }
}
?>

<?php if (isset($_POST['biodataUpdate'])) {
  include "koneksi.php";
  $id_user    = $_POST['id_user'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $email      = $_POST['email'];
  $nm_user    = $_POST['nm_user'];
  $alamat     = $_POST['alamat'];
  $no_hp      = $_POST['no_hp'];

  $query = "UPDATE `tbl_user` SET `username`='$username', `password`='$password',`email`='$email',`nm_user`='$nm_user',
  `alamat`='$alamat',`no_hp`='$no_hp' WHERE `id_user`= '$id_user'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Merubah Data");
      window.location.href = '../';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Merubah Data, Username sudah dipakai");
      window.location.href = '../profil';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['simpanProses'])) {
  include "koneksi.php";
  $id_transaksi   = $_POST['id_transaksi'];
  $tgl_proses     = date('Y-m-d');
  $keterangan     = $_POST['keterangan'];
  $id_user        = $_POST['id_user'];

  $query = "INSERT INTO `rinci_proses` (`id_transaksi`, `tgl_proses`, `ket_proses`, `id_user`) 
  VALUES ('$id_transaksi', '$tgl_proses', '$keterangan', '$id_user ') ";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { ?>
    <script>
      alert("Berhasil Merubah Data");
      window.location.href = '../admin/';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Merubah Data");
      window.location.href = '../admin/';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['kirimProses'])) {
  include "koneksi.php";
  $id_transaksi   = $_POST['id_transaksi'];
  $tgl_proses     = date('Y-m-d');
  $id_user        = $_POST['id_user'];

  $query = "INSERT INTO `rinci_proses` (`id_transaksi`, `tgl_proses`, `ket_proses`, `id_user`) 
  VALUES ('$id_transaksi', '$tgl_proses', 'PROSES PENGIRIMAN', '$id_user ') ";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) {
    $query2 = "UPDATE `tbl_transaksi` SET `status`='DIKIRIM' WHERE `id_transaksi`='$id_transaksi'";
    $sql2 = mysqli_query($conn, $query2);
?>
    <script>
      alert("Berhasil Merubah Data");
      window.location.href = '../admin/';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Merubah Data");
      window.location.href = '../admin/';
    </script>
<?php  }
}
?>

<?php if (isset($_POST['terkirimProses'])) {
  include "koneksi.php";
  $id_transaksi   = $_POST['id_transaksi'];
  $tgl_proses     = date('Y-m-d');
  $id_user        = $_POST['id_user'];

  $query = "INSERT INTO `rinci_proses` (`id_transaksi`, `tgl_proses`, `ket_proses`, `id_user`) 
  VALUES ('$id_transaksi', '$tgl_proses', 'TERKIRIM', '$id_user') ";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) {
    $query2 = "UPDATE `tbl_transaksi` SET `status`='TERKIRIM' WHERE `id_transaksi`='$id_transaksi'";
    $sql2 = mysqli_query($conn, $query2);
?>
    <script>
      alert("Berhasil Merubah Data");
      window.location.href = '../status';
    </script>
  <?php } else { ?>
    <script>
      alert("Gagal Merubah Data");
      window.location.href = '../status';
    </script>
<?php  }
}
?>