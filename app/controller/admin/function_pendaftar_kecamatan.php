<?php


function tampil_data($mysqli)
{
    include 'base_url.php';
    
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
            <td align="center" class="align-middle"><?= $nomor++; ?></td>
            <td align="center" class="align-middle"><img src="<?= $base_url; ?>public/assets/dist/img/foto/<?= $row->foto; ?>" height="80" width="80" style="border-radius: 50%;"></td>
            <td class="align-middle"><?= $row->nama_lengkap; ?></td>
            <td class="align-middle"><?= $row->jk; ?></td>
            <td class="align-middle"><?= $row->tempat_lahir; ?>, <?= $row->tgl_lahir; ?></td>
            <td class="align-middle"><?= $perwakilan; ?></td>
            <td align="center" class="align-middle">
                <form action="" method="POST" onsubmit="return confirm('Yakin Ingin Menghapus Data ?')">
                    <a href="<?= $base_url; ?>admin/pendaftar/kecamatan/<?= $row->id_peserta; ?>/detail" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                    <button type="button" class="btn btn-sm btn-warning text-light" data-toggle="modal" data-target="#modal-edit<?= $row->id_peserta; ?>"><i class="fas fa-edit"></i></button>
                    <input type="hidden" name="id" value="<?= $row->id_peserta; ?>">
                    <button type="submit" name="hapus" class="btn btn-sm btn-danger" title="Hapus"> <i class="fas fa-trash"></i> </button>
                </form>
            </td>
        </tr>
<?php
        echo "";
    }
}

function simpan($nama_lengkap, $nama_panggilan, $tempat_lahir, $tanggal_lahir, $domisili, $umur, $jenis_kelamin, $tinggi, $berat, $ukuran_baju, $ukuran_celana, $ukuran_sepatu, $alamat, $nohp, $email, $pass, $ig, $fb, $pd_terakhir, $prestasi_gabung, $keahlian_gabung, $keahlian_lainnya, $motivasi, $perwakilan, $nama_perwakilan, $foto, $foto_fullbody, $created_by, $created_at, $updated_at, $mysqli)
{
    $query = $mysqli->prepare("INSERT INTO tb_peserta (nama_lengkap, nama_panggilan, tempat_lahir, tgl_lahir, domisili, umur, jk, tinggi, berat, ukuran_baju, ukuran_celana, ukuran_sepatu, alamat, no_hp, email, pass, ig, fb, pendidikan_terakhir, prestasi, keahlian, keahlian_lainnya, motivasi, perwakilan, nama_perwakilan, foto, foto_fullbody, created_by, created_at, updated_at) 
                                VALUES ('$nama_lengkap','$nama_panggilan','$tempat_lahir','$tanggal_lahir','$domisili','$umur','$jenis_kelamin','$tinggi','$berat','$ukuran_baju','$ukuran_celana','$ukuran_sepatu','$alamat','$nohp','$email','$pass','$ig','$fb','$pd_terakhir','$prestasi_gabung','$keahlian_gabung','$keahlian_lainnya','$motivasi','$perwakilan','$nama_perwakilan','$foto','$foto_fullbody','$created_by','$created_at','$updated_at')");
    $query->execute();
}

?>