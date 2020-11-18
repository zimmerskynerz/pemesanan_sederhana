        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.4
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="#">CV. INDTEK LANGGENG MULYA</a>.</strong> All rights
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

        <!-- Modal Tambah Pengguna Toko -->
        <div class="modal fade" id="tambahPengguna" tabindex="-1" role="dialog" aria-labelledby="tambahPenggunaTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahPenggunaTitle">Tambah User Karyawan!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">USERNAME</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="nm_user">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="nm_user" name="nm_user" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Pengguna</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Contoh disini"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">NO TELEPON</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="811290xxxxxx">
                                    <input type="text" class="form-control" hidden value="ADMIN" id="jabatan" name="jabatan" placeholder="811290xxxxxx">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="simpanPengguna" id="simpanPengguna" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Detail Pengguna Toko-->
        <div class="modal fade" id="detail_user" tabindex="-1" role="dialog" aria-labelledby="detail_userTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detail_userTitle">Detail User Pengguna Toko!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="d_user">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">USERNAME</label>
                                    <input type="text" class="form-control" id="username" name="username" readonly placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="nm_user">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="nm_user" name="nm_user" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Pengguna</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Contoh disini"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">NO TELEPON</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="811290xxxxxx">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="hapusPengguna" id="hapusPengguna" class="btn btn-danger"><i class="fa fa-ban"></i> Hapus Data</button>
                        <button type="submit" name="editPengguna" id="editPengguna" class="btn btn-success"><i class="fa fa-edit"></i> Ubah Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#user_detail", function() {
                var Id_user = $(this).data('id');
                var Username = $(this).data('username');
                var User = $(this).data('user');
                var Alamat = $(this).data('alamat');
                var No_hp = $(this).data('no_hp');
                var Jabatan = $(this).data('jabatan');
                var Email = $(this).data('email');
                var Password = $(this).data('pass');
                $(".modal-body#d_user #id_user").val(Id_user);
                $(".modal-body#d_user #username").val(Username);
                $(".modal-body#d_user #nm_user").val(User);
                $(".modal-body#d_user #alamat").val(Alamat);
                $(".modal-body#d_user #no_hp").val(No_hp);
                $(".modal-body#d_user #jabatan").val(Jabatan);
                $(".modal-body#d_user #password").val(Password);
                $(".modal-body#d_user #email").val(Email);
            })
        </script>
        <!-- Proses Konfirmasi -->
        <div class="modal fade" id="konfirmasi_proses" tabindex="-1" role="dialog" aria-labelledby="konfirmasi_prosesTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasi_prosesTitle">Detail Proses Pembuatan!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="d_user">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Apakah ingin konfirmasi pemesanan ini?</label>
                                    <input type="text" class="form-control" id="kd_transaksi" name="kd_transaksi" readonly placeholder="Username">
                                    <input type="text" class="form-control" id="id_user" hidden name="id_user" value="<?= $id_user; ?>" readonly placeholder="Username">
                                    <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" hidden readonly placeholder="Username">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="tolajKonfirmasi" id="tolajKonfirmasi" class="btn btn-danger"><i class="fa fa-info"></i> Tolak</button>
                        <button type="submit" name="terimaKonfirmasi" id="terimaKonfirmasi" class="btn btn-success"><i class="fa fa-check"></i> Konfirmasi</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#proses_konfirmasi", function() {
                var id_transaksi = $(this).data('id_transaksi');
                var kd_transaksi = $(this).data('kd_transaksi');
                $(".modal-body#d_user #id_transaksi").val(id_transaksi);
                $(".modal-body#d_user #kd_transaksi").val(kd_transaksi);
            })
        </script>
        <!-- Modal Tambah Member Toko -->
        <div class="modal fade" id="tambahMember" tabindex="-1" role="dialog" aria-labelledby="tambahMemberTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahMemberTitle">Tambah Konsumen Toko!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">USERNAME</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="nm_user">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="nm_user" name="nm_user" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Pengguna</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Contoh disini"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">NO TELEPON</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="811290xxxxxx">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="simpanMember" id="simpanMember" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Detail Member Toko-->
        <div class="modal fade" id="detail_user_member" tabindex="-1" role="dialog" aria-labelledby="detail_user_memberTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detail_user_memberTitle">Detail Member Toko!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="d_user_member">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">USERNAME</label>
                                    <input type="text" class="form-control" id="username" name="username" readonly placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="nm_user">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="nm_user" name="nm_user" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Pengguna</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Contoh disini"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">NO TELEPON</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="811290xxxxxx">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="hapusPenggunaMember" id="hapusPenggunaMember" class="btn btn-danger"><i class="fa fa-ban"></i> Hapus Data</button>
                        <button type="submit" name="editPenggunaMember" id="editPenggunaMember" class="btn btn-success"><i class="fa fa-edit"></i> Ubah Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#user_detail_member", function() {
                var Id_user = $(this).data('id');
                var Username = $(this).data('username');
                var User = $(this).data('user');
                var Alamat = $(this).data('alamat');
                var No_hp = $(this).data('no_hp');
                var Jabatan = $(this).data('jabatan');
                var Tgl_lahir = $(this).data('tgl');
                var Email = $(this).data('email');
                var Password = $(this).data('pass');
                $(".modal-body#d_user_member #id_user").val(Id_user);
                $(".modal-body#d_user_member #username").val(Username);
                $(".modal-body#d_user_member #nm_user").val(User);
                $(".modal-body#d_user_member #alamat").val(Alamat);
                $(".modal-body#d_user_member #no_hp").val(No_hp);
                $(".modal-body#d_user_member #jabatan").val(Jabatan);
                $(".modal-body#d_user_member #tgl_lahir").val(Tgl_lahir);
                $(".modal-body#d_user_member #password").val(Password);
                $(".modal-body#d_user_member #email").val(Email);
            })
        </script>
        <!-- Modal Tambah Kategori Toko -->
        <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="tambahKategoriTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahKategoriTitle">Tambah Kategori Toko!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">NAMA KATEGORI</label>
                                    <input type="text" class="form-control" id="nm_kategori" name="nm_kategori" placeholder="Nama Kategori" required>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan Kategori</label>
                                    <textarea type="text" class="form-control" id="ket" name="ket" placeholder="Misal detail lengkap kategori" required></textarea>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="simpanKategori" id="simpanKategori" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Detail Kategori Toko -->
        <div class="modal fade" id="detail_kategori" tabindex="-1" role="dialog" aria-labelledby="detail_kategoriTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detail_kategoriTitle">Detail Kategori Toko!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="d_kategori">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">NAMA KATEGORI</label>
                                    <input type="text" class="form-control" id="id_kategori" name="id_kategori" hidden>
                                    <input type=" text" class="form-control" id="nm_kategori" name="nm_kategori" placeholder="Nama Kategori">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan Kategori</label>
                                    <textarea type="text" class="form-control" id="ket" name="ket" placeholder="Misal detail lengkap kategori"></textarea>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="hapusKategori" id="hapusKategori" class="btn btn-danger"><i class="fa fa-ban"></i> Hapus Data</button>
                        <button type="submit" name="editKategori" id="editKategori" class="btn btn-success"><i class="fa fa-edit"></i> Ubah Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#kategori_detail", function() {
                var Id_kategori = $(this).data('id');
                var Nm_kategori = $(this).data('nm_kategori');
                var Keterangan = $(this).data('keterangan');
                $(".modal-body#d_kategori #id_kategori").val(Id_kategori);
                $(".modal-body#d_kategori #nm_kategori").val(Nm_kategori);
                $(".modal-body#d_kategori #ket").val(Keterangan);
            })
        </script>
        <!-- Modal Tambah Barang Toko -->
        <div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="tambahBarangTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahBarangTitle">Tambah Barang Baru!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <select class="form-control" id="id_kategori" name="id_kategori" required>
                                        <option value=''>---- Pilih Kategori ----</option>
                                        <?php
                                        $desa = mysqli_query($conn, "Select * from tbl_kategori WHERE status = 'ADA'");
                                        // Query untuk menampilkan semua data desa
                                        if (mysqli_num_rows($desa) == 0) {
                                            echo "<option>Tidak Ada Kategori </option>";
                                        } else {
                                            while ($row = mysqli_fetch_assoc($desa)) {
                                                echo "
									<option value=" . $row['id_kategori'] . ">" . $row['nm_kategori'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nm_brg" name="nm_brg" placeholder="Nama Barang">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="hrg_brg" name="hrg_brg" placeholder="Harga Barang">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" required>
                                    <label class="custom-file-label" for="customFile">Foto Barang</label>
                                </div><br><br>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan Barang, Misal lama pekerjaan atau warna dst"></textarea>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="simpanBarang" id="simpanBarang" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Detail Kategori Toko -->
        <div class="modal fade" id="detail_barang" tabindex="-1" role="dialog" aria-labelledby="detail_barangTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detail_barangTitle">Detail Barang/Catalog!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="d_barang">
                        <div class="modal-body">
                            <form method="POST" action="../include/query_sql.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <select class="form-control" id="id_kategori" name="id_kategori" required>
                                        <option value=''>---- Pilih Kategori ----</option>
                                        <?php
                                        $desa = mysqli_query($conn, "Select * from tbl_kategori");
                                        // Query untuk menampilkan semua data desa
                                        if (mysqli_num_rows($desa) == 0) {
                                            echo "<option>Tidak Ada Kategori </option>";
                                        } else {
                                            while ($row = mysqli_fetch_assoc($desa)) {
                                                echo "
									<option value=" . $row['id_kategori'] . ">" . $row['nm_kategori'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">KODE BARANG</label>
                                    <input type="text" class="form-control" readonly id="kd_brg_id" name="kd_brg_id" placeholder="Nama Barang">
                                    <input type="text" class="form-control" id="kd_brg" name="kd_brg" hidden placeholder="Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="">NAMA BARANG</label>
                                    <input type="text" class="form-control" id="nm_brg" name="nm_brg" placeholder="Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="">HARGA BARANG</label>
                                    <input type="text" class="form-control" id="hrg_brg" name="hrg_brg" placeholder="Harga Barang">
                                </div>
                                <div class="form-group">
                                    <img src="" width="60%" id="pict" name="pict">
                                </div>
                                <div class="custom-file">
                                    <label for="">FOTO BARANG</label>
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="customFile">Foto Barang</label>
                                </div><br>
                                <div class="form-group">
                                    <label for="">DETAIL BARANG</label>
                                    <textarea type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan Barang, Misal lama pekerjaan atau warna dst"></textarea>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="hapusBarang" id="hapusBarang" class="btn btn-danger"><i class="fa fa-ban"></i> Hapus Data</button>
                        <button type="submit" name="editbarang" id="editbarang" class="btn btn-success"><i class="fa fa-edit"></i> Ubah Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#barang_detail", function() {
                var id = $(this).data('id');
                var kd_brg_id = $(this).data('kd_brg_id');
                var kd_brg = $(this).data('kd_brg');
                var nm_brg = $(this).data('nm_brg');
                var hrg_brg = $(this).data('hrg_brg');
                var luas = $(this).data('luas');
                var detail = $(this).data('detail');
                var foto = $(this).data('foto');
                $(".modal-body#d_barang #id_kategori").val(id);
                $(".modal-body#d_barang #kd_brg_id").val(kd_brg_id);
                $(".modal-body#d_barang #kd_brg").val(kd_brg);
                $(".modal-body#d_barang #nm_brg").val(nm_brg);
                $(".modal-body#d_barang #hrg_brg").val(hrg_brg);
                $(".modal-body#d_barang #luas").val(luas);
                $(".modal-body#d_barang #ket").val(detail);
                $(".modal-body#d_barang #pict").attr("src", "../img/product-img/" + foto);
            })
        </script>
        <!-- Modal -->
        <div class="modal fade" id="laporanNew" tabindex="-1" role="dialog" aria-labelledby="laporanNewLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="laporanNewLabel">Lihat Laporan!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="laporan.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                    <select name="bulan" class="form-control">
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <select name="tahun" class="form-control">
                                        <?php
                                        $mulai = date('Y') - 50;
                                        for ($i = $mulai; $i < $mulai + 100; $i++) {
                                            $sel = $i == date('Y') ? ' selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="laporanLihat" id="laporanLihat" class="btn btn-success"><i class="fa fa-search"></i> Lihat Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>