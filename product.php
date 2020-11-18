<?php include 'include/header_member.php' ?>
<?php $kd_brg = $_GET['id-product'];
$data_product = mysqli_query($conn, "select * from tbl_kategori as A inner join tbl_barang as B
on A.id_kategori = B.id_kategori where A.status='ADA' and B.status='TERSEDIA' and B.kd_brg='$kd_brg'");
$product = mysqli_fetch_array($data_product);
?>

<body>
    <?php include 'include/menu_member.php' ?>
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <img src="img/product-img/<?= $product['foto']; ?>" alt="">
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span><?= $product['nm_kategori']; ?></span>
            <a href="cart.html">
                <h2><?= $product['nm_brg']; ?></h2>
            </a>
            <p class="product-price">Harga : <?= $product['hrg_brg']; ?>,-</p>
            <p class="product-desc"><?= $product['detail']; ?>;</p>

            <!-- Form -->
            <form action="include/query_sql" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <input hidden value="<?= $data_member['id_user']; ?>" type="text" class="form-control" id="id_user" name="id_user">
                    <input hidden value="<?= $product['kd_brg']; ?>" type="text" class="form-control" id="kd_brg" name="kd_brg">
                    <input hidden value="<?= $product['hrg_brg']; ?>" type="text" class="form-control" id="hrg_brg" name="hrg_brg">
                </div>
                <label for="inputEmail4">Jumlah Beli</label>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="number" step="1" class="form-control" id="jml_beli" pattern="\d+" name="jml_beli" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Keterangan</label>
                    <textarea type="text" class="form-control" id="ket_lain" name="ket_lain" placeholder="Keterangan Lain Misal warna,cat, dst"></textarea>
                </div>
				<button type="submit" class="btn btn-primary btn-lg" name="beliProductOri" value="beliProductOri" id="beliProduct">Pesan</button>
            </form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

    <?php include 'include/footer_member.php' ?>

</body>

</html>