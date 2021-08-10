<?php

function simpan($nama_lengkap,$nama_panggilan,$tempat_lahir,$tanggal_lahir,$domisili,$umur,$jenis_kelamin,$tinggi,$berat,$ukuran_baju,$ukuran_celana,$ukuran_sepatu,$alamat,$nohp,$email,$ig,$fb,$pd_terakhir,$prestasi_gabung,$keahlian_check,$keahlian_lainnya,$motivasi,$perwakilan,$nama_perwakilan,$foto,$foto_fullbody,$mysqli)
{
    $query = $mysqli->prepare("INSERT INTO tb_peserta (nama_lengkap,nama_panggilan,tempat_lahir,tgl_lahir,domisili,umur,jk,tinggi,berat,ukuran_baju,ukuran_celana,ukuran_sepatu,alamat,no_hp,email,pass,ig,fb,pendidikan_terakhir,prestasi,keahlian,keahlian_lainnya,motivasi,perwakilan,nama_perwakilan,foto,foto_fullbody) VALUES ('$nama_lengkap','$nama_panggilan','$tempat_lahir','$tanggal_lahir','$domisili','$umur','$jenis_kelamin','$tinggi','$berat','$ukuran_baju','$ukuran_celana','$ukuran_sepatu','$alamat','$nohp','$email','12345','$ig','$fb','$pd_terakhir','$prestasi_gabung','$keahlian_check','$keahlian_lainnya','$motivasi','$perwakilan','$nama_perwakilan','$foto','$foto_fullbody')");
    $query->execute();
}

function tampil_data($mysqli)
{
    $query = $mysqli->prepare("SELECT * FROM tb_peserta");
    $query->execute();
    $result = $query->get_result();
    $nomor = 1;
    while ($row = $result->fetch_object()) {
        $id_kec = $row->perwakilan;

        $result1 = $mysqli->query("SELECT * FROM tb_kecamatan WHERE id='$id_kec'");
        $row1 = mysqli_fetch_assoc($result1);
        $perwakilan = $row1['nama_kecamatan'];


        echo "";
?>
        <tr>
            <td align="center"><?= $nomor++; ?></td>
            <td><img src="public/assets/dist/img/foto/<?= $row->foto; ?>" style="max-width: 100px; border-radius: 50%;"></td>
            <td><?= $row->nama_lengkap; ?></td>
            <td><?= $row->jk; ?></td>
            <td><?= $row->tempat_lahir; ?>, <?= $row->tgl_lahir; ?></td>
            <td><?= $perwakilan; ?></td>
            <td align="center">
                
                <form action="" method="POST" onsubmit="return confirm('Yakin Ingin Menghapus Data ?')">
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-edit<?= $row->id_peserta; ?>"><i class="fas fa-edit"></i></button>
                    <input type="hidden" name="id" value="<?= $row->id_peserta; ?>">
                    <button type="submit" name="hapus" class="btn btn-sm btn-danger" title="Hapus"> <i class="fas fa-trash"></i> </button>
                </form>
            </td>
        </tr>
<?php
        echo "";
    }
}

function hapus($id, $mysqli)
{
    $query = $mysqli->prepare("DELETE FROM tb_peserta WHERE id_peserta=$id");
    $query->execute();
}

?>