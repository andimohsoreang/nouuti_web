<?php
    include 'app/controller/admin/post_operator.php';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><small><?= $pageTitle; ?></small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><small>Master Data</small></li>
                    <li class="breadcrumb-item active"><small><?= $pageTitle; ?></small></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php
                    if (isset($_SESSION['success'])) {
                ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                <?php
                    }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-1">Daftar Operator</h3>
                        <div class="float-right">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus-circle"></i> Create Operator</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-sm">
                                    <th width="5%">No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Penugasan</th>
                                    <th>Kecamatan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_data($mysqli); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form <?= $pageTitle; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">                
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penugasan</label>
                        <div id="penugasan">
                            <div class="form-check">
                                <input class="form-check-input penugasan" type="radio" name="penugasan" value="kabupaten">
                                <label class="form-check-label">Kabupaten</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input penugasan" type="radio" name="penugasan" value="kecamatan">
                                <label class="form-check-label">Kecamatan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input penugasan" type="radio" name="penugasan" value="umum">
                                <label class="form-check-label">Umum</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->