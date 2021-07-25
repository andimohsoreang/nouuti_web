<?php

function simpan($nama_provinsi, $mysqli)
{
    $query = $mysqli->prepare("INSERT INTO tb_provinsi (nama_provinsi) VALUES ('$nama_provinsi')");
    $query->execute();
}

function tampil_data($mysqli)
{
    $query = $mysqli->prepare("SELECT * FROM tb_provinsi ORDER BY nama_provinsi ASC" ) ;
    $query->execute();
    $result = $query->get_result();
    $nomor = 1;
    while ($row = $result->fetch_object()) {
        echo "";
?>
        <tr>
            <td align="center"><?= $nomor++; ?></td>
            <td><?= $row->nama_provinsi; ?></td>
            <td align="center">
                
                <form action="" method="POST" onsubmit="return confirm('Yakin Ingin Menghapus Data ?')">
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-edit<?= $row->id; ?>"><i class="fas fa-edit"></i></button>
                    <input type="hidden" name="id" value="<?= $row->id; ?>">
                    <button type="submit" name="hapus" class="btn btn-sm btn-danger" title="Hapus"> <i class="fas fa-trash"></i> </button>
                </form>
            </td>
        </tr>

        <div class="modal fade" id="modal-edit<?= $row->id; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Form Edit Data Provinsi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $row->id; ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama">Nama Provinsi</label>
                                <input type="text" id="nama" name="nama" placeholder="Nama Kecamatan" class="form-control" value="<?= $row->nama_provinsi; ?>">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<?php
        echo "";
    }
}

function hapus($id, $mysqli)
{
    $query = $mysqli->prepare("DELETE FROM tb_provinsi WHERE id=$id");
    $query->execute();
}

function edit($id,$nama_provinsi,$mysqli)
{
    $query = $mysqli->prepare("UPDATE tb_provinsi SET nama_provinsi='$nama_provinsi' WHERE id=$id");
    $query->execute();
}
?>