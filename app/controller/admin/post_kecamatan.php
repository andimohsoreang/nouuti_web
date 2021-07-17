<?php 

include 'app/controller/admin/function_kecamatan.php';

if(isset($_POST['simpan'])){
    $nama_kecamatan = $_POST['nama'];
    simpan($nama_kecamatan,$mysqli);
}

if(isset($_POST['hapus'])){
    $id = $_POST['id'];
    hapus($id,$mysqli);
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_kecamatan = $_POST['nama'];
    edit($id,$nama_kecamatan,$mysqli);
}

?>