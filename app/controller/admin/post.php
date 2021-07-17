<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);
        $penugasan = $_POST['penugasan'];
        $kecamatan = $_POST['kecamatan'];
    }
?>