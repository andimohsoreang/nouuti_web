<?php 

include 'app/controller/admin/function_pendaftaran_kecamatan.php';
include 'app/controller/admin/function_upload_pendaftaran.php';
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
    $ig = $_POST['ig'];
    $fb = $_POST['fb'];
    $pd_terakhir = $_POST['pd_terakhir'];
    $prestasi = $_POST['prestasi'];
    $prestasi_gabung = implode(',',$prestasi);
    $keahlian = $_POST['keahlian'];
    $keahlian_check = implode(',',$keahlian);
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

    var_dump($nama_lengkap,$nama_panggilan,$tempat_lahir,$tanggal_lahir,$domisili,$umur,$jenis_kelamin,$tinggi,$berat,$ukuran_baju,$ukuran_celana,$ukuran_sepatu,$alamat,$nohp,$email,$ig,$fb,$pd_terakhir,$prestasi_gabung,$keahlian_check,$keahlian_lainnya,$motivasi,$perwakilan,$nama_perwakilan,$foto,$foto_fullbody);
    flash('success', 'Pendaftaran Kecamatan berhasil disimpan');
}

if(isset($_POST['hapus'])){
    $id = $_POST['id'];
    hapus($id,$mysqli);
    flash('success', 'Data Kecamatan berhasil dihapus!');
}

?>