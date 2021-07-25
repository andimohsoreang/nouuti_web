<?php

function simpan($nama, $username, $encrypt_pass, $penugasan, $kecamatan, $created_at, $updated_at, $mysqli)
{
    $query = $mysqli->prepare("INSERT INTO tb_operator (nama_operator,username,pass,akses,id_kecamatan,created_at,updated_at) VALUES ('$nama', '$username', '$encrypt_pass', '$penugasan', '$kecamatan', '$created_at', '$updated_at')");
    $query->execute();
}

function tampil_data($mysqli)
{
    $query = $mysqli->prepare("SELECT * FROM tb_operator ORDER BY akses ASC");
    $query->execute();
    $result = $query->get_result();
    $nomor = 1;
    while ($row = $result->fetch_object()) {
        $query_kec = $mysqli->prepare("SELECT * FROM tb_kecamatan WHERE id='$row->id_kecamatan'");
        $query_kec->execute();
        $result_kec = $query_kec->get_result();
        $row_kec = $result_kec->fetch_object();
        $nama_kec = isset($row_kec->nama_kecamatan) ? $row_kec->nama_kecamatan : "-";

        $tkn = 'KSL_2k21';
        $ido = $row->id_operator;
        $token = md5("$tkn:$ido");
        echo "";
?>
        <tr>
            <td><?= $nomor; ?></td>
            <td><?= $row->nama_operator; ?></td>
            <td><?= $row->username; ?></td>
            <td><?= $row->akses; ?></td>
            <td><?= $nama_kec; ?></td>
            <td>
                <form action="" method="POST" onsubmit="return confirm('Yakin ingin menghapus data?')">
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-edit<?= $row->id_operator; ?>"><i class="fas fa-edit"></i></button>
                    <input type="hidden" name="id_operator" value="<?= $row->id_operator; ?>">
                    <input type="hidden" name="token" value="<?= $token; ?>">
                    <button type="submit" name="hapus" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        <div class="modal fade" id="modal-edit<?= $row->id_operator; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Form Edit Data Operator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                        <input type="hidden" name="id_operator" value="<?= $row->id_operator; ?>">
                        <input type="hidden" name="token" value="<?= $token; ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?= $row->nama_operator; ?>">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Username" class="form-control" value="<?= $row->username; ?>">
                            </div>
                            <div class="form-group">
                                <label>Penugasan</label>
                                <div class="form-check">
                                    <input class="form-check-input penugasan<?= $nomor; ?>" type="radio" name="penugasan" value="kabupaten" <?php if ($row->akses == "kabupaten") { echo "checked"; } ?> />
                                    <label class="form-check-label">Kabupaten</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input penugasan<?= $nomor; ?>" type="radio" name="penugasan" value="kecamatan" <?php if ($row->akses == "kecamatan") { echo "checked"; } ?> />
                                    <label class="form-check-label">Kecamatan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input penugasan<?= $nomor; ?>" type="radio" name="penugasan" value="umum" <?php if ($row->akses == "umum") { echo "checked"; } ?> />
                                    <label class="form-check-label">Umum</label>
                                </div>  
                            </div>
                            <div class="form-group mt-2" id="kec<?= $nomor; ?>" style="display: none;">
                                <label>Kecamatan</label>
                                <select name="id_kecamatan" class="form-control">
                                    <option value="0">--Pilih-Kecamatan--</option>
                                    <?php
                                        $queryK = $mysqli->prepare("SELECT * FROM tb_kecamatan");
                                        $queryK->execute();
                                        $resultK = $queryK->get_result();
                                        while ($rowK = $resultK->fetch_object()) {
                                            if ($row->id_kecamatan === $rowK->id) {
                                                echo"<option value='$rowK->id' selected>$rowK->nama_kecamatan</option>";
                                            } else {
                                                echo"<option value='$rowK->id'>$rowK->nama_kecamatan</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
  
        <?php include 'base_url.php'; ?>
        <script src="<?= $base_url; ?>public/assets/plugins/jquery/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
               $('.penugasan<?= $nomor; ?>').filter(function() {
                   if ($(this).is(":checked")) {
                       if ($(this).val() == "kecamatan") {
                           $('#kec<?= $nomor; ?>').show();
                       } else {
                           $('#kec<?= $nomor; ?>').hide();
                       }
                   }
               });

               $('.penugasan<?= $nomor; ?>').change(function() {
                   if ($(this).is(":checked")) {
                       if ($(this).val() == "kecamatan") {
                           $('#kec<?= $nomor; ?>').show();
                       } else {
                           $('#kec<?= $nomor; ?>').hide();
                       }
                   }
               });
            });
        </script>
<?php
        echo "";
    $nomor++;
    }
}

function hapus($id_operator, $mysqli)
{
    $query = $mysqli->prepare("DELETE FROM tb_operator WHERE id_operator=$id_operator");
    $query->execute();
}

function update($id_operator, $nama, $username, $penugasan, $id_kecamatan, $updated_at, $mysqli)
{
    $query = $mysqli->prepare("UPDATE tb_operator SET nama_operator='$nama',username='$username',akses='$penugasan',id_kecamatan='$id_kecamatan',updated_at='$updated_at' WHERE id_operator='$id_operator'");
    $query->execute();
}