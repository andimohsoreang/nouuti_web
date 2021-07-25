<?php 

include 'app/controller/admin/function_provinsi.php';
include 'app/flash_message.php';

if(isset($_POST['simpan'])){
    $nama_provinsi = $_POST['nama'];
    simpan($nama_provinsi,$mysqli);
    flash('success', 'Data Provinsi berhasil disimpan');

}

if(isset($_POST['hapus'])){
    $id = $_POST['id'];
    hapus($id,$mysqli);
    flash('success', 'Data Provinsi berhasil dihapus!');
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_provinsi = $_POST['nama'];
    edit($id,$nama_provinsi,$mysqli);
    flash('success', 'Data Provinsi berhasil diubah!');

}

?>