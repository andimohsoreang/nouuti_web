<?php
    if (isset($_GET['action']) && $_GET['action'] == "detail") {
        $id_peserta = $_GET['user'];

        $query = $mysqli->prepare("SELECT * FROM tb_peserta WHERE id_peserta='$id_peserta'");
        $query->execute();
        $result = $query->get_result();
        $row = $result->fetch_object();

        $query_provinsi = $mysqli->prepare("SELECT * FROM tb_provinsi WHERE id='$row->domisili'");
        $query_provinsi->execute();
        $result_provinsi = $query_provinsi->get_result();
        $row_provinsi = $result_provinsi->fetch_object();

        $query_kecamatan = $mysqli->prepare("SELECT * FROM tb_kecamatan WHERE id='$row->perwakilan'");
        $query_kecamatan->execute();
        $result_kecamatan = $query_kecamatan->get_result();
        $row_kecamatan = $result_kecamatan->fetch_object();
    } else {
        ?>
            <script>
                alert('Url tidak terdeteksi!');
                document.location = '<?= $base_url; ?>admin/pendaftar/kecamatan';
            </script>
        <?php
    }
?>