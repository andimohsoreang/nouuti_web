<?php
    include 'app/controller/admin/function_operator.php';
    include 'app/flash_message.php';

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);
        $penugasan = $_POST['penugasan'];
        $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
        date_default_timezone_set("Asia/Makassar");
        $created_at = date("Y:m:d H:i:s");
        $updated_at = date("Y:m:d H:i:s");

        simpan($nama, $username, $encrypt_pass, $penugasan, $kecamatan, $created_at, $updated_at, $mysqli);
        flash('success', 'Data operator berhasil disimpan');
    }

    if (isset($_POST['hapus'])) {
        $id_operator = $_POST['id_operator'];
        $token = $_POST['token'];

        $tkn = 'KSL_2k21';
        $token_hapus = md5("$tkn:$id_operator");

        if ($token_hapus === $token) {
            hapus($id_operator, $mysqli);
            flash('success', 'Data operator berhasil dihapus!');
        }
    }

    if (isset($_POST['update'])) {
        $id_operator = $_POST['id_operator'];
        $token = $_POST['token'];

        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $penugasan = $_POST['penugasan'];

        if ($penugasan == "kecamatan") {
            $id_kecamatan = $_POST['id_kecamatan'];
        } else {
            $id_kecamatan = "";
        }

        date_default_timezone_set("Asia/Makassar");
        $updated_at = date("Y:m:d H:i:s");

        $tkn = 'KSL_2k21';
        $token_update = md5("$tkn:$id_operator");

        if ($token_update === $token) {
            update($id_operator, $nama, $username, $penugasan, $id_kecamatan, $updated_at, $mysqli);
            flash('success', 'Data operator berhasil diupdate!');
        }
    }
?>