    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> CV. INDTEK LANGGENG MULYA <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">RumahCreator</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- DataTables -->
    <script src="include/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="include/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="include/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="include/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Modal Detail Keranjang Toko -->
    <div class="modal fade" id="detail_keranjang" tabindex="-1" role="dialog" aria-labelledby="detail_keranjangTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body" id="d_keranjang">
                    <div class="modal-body">
                        <form method="POST" action="include/query_sql.php" enctype="multipart/form-data">
                            <h5 class="modal-title" id="detail_keranjangTitle">Apakah Yakin ingin menghapus pesanan anda?</h5>
                            <div class="form-group">
                                <input type="text" class="form-control" hidden id="id_transaksi" name="id_transaksi">
                                <input type="text" class="form-control" hidden id="id_user" name="id_user">
                                <input type="text" class="form-control" hidden id="kd_brg" name="kd_brg">
                                <input type="text" class="form-control" hidden id="luas_akhir" name="luas_akhir">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="hapusPesanan" id="hapusPesanan" class="btn btn-danger"><i class="fa fa-ban"></i> Hapus Pesanan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).on("click", "#keranjang_detail", function() {
            var id_transaksi = $(this).data('id_transaksi');
            var id_user = $(this).data('id_user');
            var kd_brg = $(this).data('kd_brg');
            var luas_akhir = $(this).data('luas_akhir');
            $(".modal-body#d_keranjang #id_transaksi").val(id_transaksi);
            $(".modal-body#d_keranjang #id_user").val(id_user);
            $(".modal-body#d_keranjang #kd_brg").val(kd_brg);
            $(".modal-body#d_keranjang #luas_akhir").val(luas_akhir);
        })
    </script>
    <!-- Modal Detail Upload Transaksi Toko -->
    <div class="modal fade" id="detail_upload" tabindex="-1" role="dialog" aria-labelledby="detail_uploadTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body" id="d_upload">
                    <div class="modal-body">
                        <form method="POST" action="include/query_sql.php" enctype="multipart/form-data">
                            <h5 class="modal-title" id="detail_uploadTitle">Upload Bukti Transfer Anda Disini?</h5>
                            <div class="form-group">
                                <input type="text" class="form-control" hidden id="id_transaksi" name="id_transaksi">
                            </div>
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required id="foto" name="foto">
                                <label class="custom-file-label" for="customFile">Upload Bukti Transfer</label>
                            </div><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="uploadBukti" id="uploadBukti" class="btn btn-danger"><i class="fa fa-upload"></i> Upload</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="terima_barang" tabindex="-1" role="dialog" aria-labelledby="terima_barangTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="POST" action="include/query_sql.php" enctype="multipart/form-data">
                    <h5 class="modal-title" id="detail_uploadTitle">Terima barang pesanan anda!</h5>
                    <div class="modal-footer" id="d_ada">
                        <input type="text" class="form-control" hidden id="id_transaksi" name="id_transaksi">
                        <input type="text" class="form-control" hidden value="<?= $id_user; ?>" id="id_user" name="id_user">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="terkirimProses" id="terkirimProses" class="btn btn-success"><i class="fa fa-check"></i> Terima</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).on("click", "#upload_detail", function() {
            var id_transaksi = $(this).data('id_transaksi');
            $(".modal-body#d_upload #id_transaksi").val(id_transaksi);
            $(".modal-footer#d_ada #id_transaksi").val(id_transaksi);
        })
    </script>