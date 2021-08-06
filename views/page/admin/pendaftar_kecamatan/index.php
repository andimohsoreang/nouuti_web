<?php
    include 'app/controller/admin/post_pendaftar_kecamatan.php';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><small><?= $pageTitle; ?></small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><small>Pendaftar Kecamatan</small></li>
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
                        <h3 class="card-title mt-1">Daftar Peserta</h3>
                        <div class="float-right">
                            <a href="<?= $base_url; ?>admin/pendaftar/kecamatan/create" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Create Peserta</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-sm">
                                    <th width="5%">No</th>
                                    <th>Foto</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Tanggal Lahir</th>
                                    <th>Perwakilan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                    tampil_data($mysqli); 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>