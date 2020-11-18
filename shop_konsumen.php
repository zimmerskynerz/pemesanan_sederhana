<?php include 'include/header_konsumen.php' ?>
<body>
    <!-- ##### Header Area Start ##### -->
    <?php include 'include/menu_konsumen.php' ?>
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>CV. INDTEK LANGGENG MULYA</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Kategori Product</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="shop">Semua Product</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <?php
                                            $sql_kategori = "select * from tbl_kategori where status='ADA'";
                                            // Query untuk menampilkan semua data buku  
                                            $no = 1;
                                            $query_kategori = mysqli_query($conn, $sql_kategori);
                                            while ($kategori = mysqli_fetch_assoc($query_kategori)) {
                                            ?>
                                                <li><a href="shop_kategori?id_kategori=<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nm_kategori']; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span><?= $jml_product ?></span> products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $sql_tampil = "select * from tbl_barang where status='tersedia'";
                            // Query untuk menampilkan semua data buku  
                            $no = 1;
                            $query_tampil = mysqli_query($conn, $sql_tampil);
                            while ($product = mysqli_fetch_assoc($query_tampil)) {
                            ?>
                                <!-- Single Product -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <a href="product?id-product=<?php echo $product['kd_brg']; ?>">
                                            <div class="product-img">
                                                <img src="img/product-img/<?= $product['foto']; ?>" alt="">
                                            </div>
                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <h6><?= $product['nm_brg'] ?></h6>
                                                <span><?= $product['detail'] ?></span>
                                                <p class="product-price">Rp <?= $product['hrg_brg'] ?>,-</p>
                                            </div>
                                            <a type="button" href="login_member.php" class="btn btn-primary btn-lg"> Detail</a>
                                        </a>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer_member.php' ?>
</body>

</html>