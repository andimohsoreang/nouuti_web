<?php

include 'app/controller/admin/function_pendaftar_kecamatan.php';
include 'app/controller/admin/function_upload_pendaftar.php';
include 'app/flash_message.php';

if(isset($_POST['simpan'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $domisili = $_POST['domisili'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $ukuran_baju = $_POST['ukuran_baju'];
    $ukuran_celana = $_POST['ukuran_celana'];
    $ukuran_sepatu = $_POST['ukuran_sepatu'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    if ($jenis_kelamin == "Laki-laki") {
        $create_pass = 'CalonUti';
    } else {
        $create_pass = 'CalonNou';
    }
    $pass = password_hash($create_pass, PASSWORD_DEFAULT);
    $ig = $_POST['ig'];
    $fb = $_POST['fb'];
    $pd_terakhir = $_POST['pd_terakhir'];
    if (!empty($_POST['prestasi'])) {
        // $prestasi = $_POST['prestasi'];
        $prestasi_gabung = $_POST['prestasi'];
    } else {
        $prestasi_gabung = "-";
    }
    if (!empty($_POST['keahlian'])) {
        $keahlian = $_POST['keahlian'];
        $keahlian_gabung = implode(',',$keahlian);
    } else {
        $keahlian_gabung = "-";
    }
    $keahlian_lainnya = $_POST['keahlian_lainnya'];
    $motivasi = $_POST['motivasi'];
    $perwakilan = $_POST['perwakilan'];
    $nama_perwakilan = $_POST['nama_perwakilan'];
    $foto = upload_foto();
    if (!$foto) {
        return false;
    }
    $foto_fullbody = upload_foto_fullbody();
    if (!$foto_fullbody) {
        return false;
    }
    $created_by = $_SESSION['username'];
    $created_at = date("Y:m:d H:i:s");
    $updated_at = date("Y:m:d H:i:s");

    simpan($nama_lengkap, $nama_panggilan, $tempat_lahir, $tanggal_lahir, $domisili, $umur, $jenis_kelamin, $tinggi, $berat, $ukuran_baju, $ukuran_celana, $ukuran_sepatu, $alamat, $nohp, $email, $pass, $ig, $fb, $pd_terakhir, $prestasi_gabung, $keahlian_gabung, $keahlian_lainnya, $motivasi, $perwakilan, $nama_perwakilan, $foto, $foto_fullbody, $created_by, $created_at, $updated_at, $mysqli);
    flash('success', 'Data Pendaftar berhasil disimpan');
}

?>