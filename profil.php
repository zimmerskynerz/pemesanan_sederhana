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
                        <h2>biodata member!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="include/query_sql.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $data_member['id_user']; ?>" hidden>
                <input type="text" class="form-control" id="username" name="username" value="<?= $data_member['username']; ?>">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" value="<?= $data_member['password']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="nm_user" name="nm_user" value="<?= $data_member['nm_user']; ?>">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" value="<?= $data_member['email']; ?>" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data_member['no_hp']; ?>">
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" id="alamat" name="alamat"><?= $data_member['alamat']; ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit" id="biodataUpdate" name="biodataUpdate">Update Biodata</button>
        </form>
    </div>
    <?php include 'include/footer_member.php' ?>

</body>

</html>