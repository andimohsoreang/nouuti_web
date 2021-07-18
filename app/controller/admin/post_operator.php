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

        simpan($nama, $username, $encrypt_pass, $penugasan, $kecamatan, $mysqli);
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
?>