<footer class="main-footer">
    <small>
        <strong>Copyright &copy; 2021 <a href="#">Nou-Uti Kabupaten Gorontalo</a>.</strong>
        All rights reserved.
    </small>
    <div class="float-right d-none d-sm-inline-block">
        <small>
            <b>Version</b> 1.0
        </small>
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= $base_url; ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $base_url; ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= $base_url; ?>public/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= $base_url; ?>public/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= $base_url; ?>public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= $base_url; ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= $base_url; ?>public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $base_url; ?>public/assets/dist/js/adminlte.js"></script>

<script>
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
</script>
<script>
    $('.penugasan').click(function () {
        const html = `<div class="form-group kecamatan mt-2">
                        <label for="id_kecamatan">Kecamatan</label>
                        <select id="id_kecamatan" name="kecamatan" class="form-control">
                            <option>--Pilih-Kecamatan--</option>
                            <?php
                                $query = $mysqli->prepare("SELECT * FROM tb_kecamatan");
                                $query->execute();
                                $result = $query->get_result();
                                while ($row = $result->fetch_object()) {
                                    echo"<option value='$row->id'>$row->nama_kecamatan</option>";
                                }
                            ?>
                        </select>
                    </div>`;
        $('.kecamatan').remove();
        if ($(this).val() == "kecamatan") {
            $('#penugasan').parent().append(html);
        }
    });
</script>
</body>

</html>