        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.4
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../include/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables -->
        <script src="../include/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../include/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../include/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../include/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../include/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../include/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>

        <!-- Modal Detail Pengguna Toko-->
        <div class="modal fade" id="gudang_proses" tabindex="-1" role="dialog" aria-labelledby="gudang_prosesTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="gudang_prosesTitle">Detail Proses Pembuatan!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="d_user">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">KODE TRANSAKSI</label>
                                    <input type="text" class="form-control" id="kd_transaksi" name="kd_transaksi" readonly placeholder="Username">
                                    <input type="text" class="form-control" id="id_user" hidden name="id_user" value="<?= $id_user; ?>" readonly placeholder="Username">
                                    <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" hidden readonly placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="nm_user">KETERANGAN</label>
                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Proses Pengerjaan"></textarea>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="terkirimProses" id="terkirimProses" class="btn btn-success"><i class="fa fa-home"></i> Terkirim</button>
                        <button type="submit" name="kirimProses" id="kirimProses" class="btn btn-success"><i class="fa fa-home"></i> Proses Kirim</button>
                        <button type="submit" name="simpanProses" id="simpanProses" class="btn btn-success"><i class="fa fa-upload"></i> Proses Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#proses_gudang", function() {
                var id_transaksi = $(this).data('id_transaksi');
                var kd_transaksi = $(this).data('kd_transaksi');
                $(".modal-body#d_user #id_transaksi").val(id_transaksi);
                $(".modal-body#d_user #kd_transaksi").val(kd_transaksi);
            })
        </script>