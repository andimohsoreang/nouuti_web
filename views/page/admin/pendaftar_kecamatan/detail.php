<?php
include 'app/controller/admin/get_pendaftar_kecamatan.php';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><small><?= $pageTitle; ?></small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= $base_url; ?>admin/pendaftar/kecamatan"><small>Pendaftar Kecamatan</small></a></li>
                    <li class="breadcrumb-item active"><small><?= $pageTitle; ?></small></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><a href="<?= $base_url; ?>admin/pendaftar/kecamatan"><i class="fas fa-arrow-circle-left"></i> Kembali</a></h3>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= $base_url; ?>public/assets/dist/img/foto/<?= $row->foto; ?>" style="width:100px;height:100px;" alt="User profile picture">
                        </div>

                        <div class="mt-2">
                            <h3 class="profile-username text-center"><?= $row->nama_lengkap; ?></h3>
                            <p class="text-muted text-center"><?= $row->nama_panggilan; ?></p>
                        </div>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Perwakilan</b> <br> 
                                <span class="text-muted"><?= $row_kecamatan->nama_kecamatan; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Nama Perwakilan</b> <br> 
                                <span class="text-muted"><?= $row->nama_perwakilan; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Instagram</b> <br> 
                                <span class="text-muted"><?= $row->ig; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Facebook</b> <br> 
                                <span class="text-muted"><?= $row->fb; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <br> 
                                <span class="text-muted"><?= $row->email; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Nomor Handphone</b> <br> 
                                <span class="text-muted"><?= $row->no_hp; ?></span>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Pendaftar</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Tinggi Badan</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $row->tinggi; ?> cm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <div class="info-box-text text-center text-muted">
                                                    Berat Badan
                                                    <?php
                                                    $berat = $row->berat;
                                                    $tinggi = $row->tinggi;
                                                    $meter = $tinggi / 100;
                                                    $bmi = ($berat / ($meter * $meter));
                                                    ?>
                                                    <?php if (($bmi >= 25.1) && ($bmi <= 27) || ($bmi > 27)) : ?>
                                                        <span class="badge badge-danger">Gemuk</span>
                                                    <?php elseif (($bmi >= 18.5) && ($bmi <= 25)) : ?>
                                                        <span class="badge badge-success">Normal</span>
                                                    <?php else : ?>
                                                        <span class="badge badge-danger">Kurus</span>
                                                    <?php endif; ?>
                                                </div>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $berat; ?> kg</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Ukuran Baju</span>
                                                <span class="info-box-number text-center text-muted mb-0">
                                                    <?php if ($row->ukuran_baju == 'S') : ?>
                                                        Small (S)
                                                    <?php elseif ($row->ukuran_baju == 'M') : ?>
                                                        Medium (M)
                                                    <?php else : ?>
                                                        Large (L)
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Ukuran Celana</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $row->ukuran_celana; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Ukuran Sepatu</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $row->ukuran_sepatu; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <strong>Tempat Tanggal Lahir</strong>
                                <p class="text-muted">
                                <?= $row->tempat_lahir; ?>, <?= date("d-m-Y", strtotime($row->tgl_lahir)); ?>
                                </p>

                                <strong>Umur</strong>
                                <p class="text-muted">
                                <?= $row->umur; ?> Tahun
                                </p>

                                <strong>Jenis Kelamin</strong>
                                <p class="text-muted">
                                <?= $row->jk; ?>
                                </p>

                                <strong>Alamat</strong>
                                <p class="text-muted">
                                <?= $row->alamat; ?>
                                </p>

                                <strong>Domisili</strong>
                                <p class="text-muted">
                                <?= $row_provinsi->nama_provinsi; ?>
                                </p>

                                <strong>Pendidikan Terakhir</strong>
                                <p class="text-muted">
                                <?= $row->pendidikan_terakhir; ?>
                                </p>

                                <strong>Prestasi 3 Tahun Terakhir</strong>
                                <p class="text-muted">
                                <?= $row->prestasi; ?>
                                </p>

                                <strong>Keahlian</strong>
                                <p class="text-muted">
                                <?= $row->keahlian; ?>
                                </p>

                                <strong>Keahlian Lainnya</strong>
                                <p class="text-muted">
                                <?= $row->keahlian_lainnya; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <strong>Motivasi Menjadi Nou/Uti</strong>
                                <p class="text-muted text-justify">
                                <?= $row->motivasi; ?>
                                </p>

                                <strong>Foto</strong>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="<?= $base_url; ?>public/assets/dist/img/foto/<?= $row->foto; ?>" data-lightbox="image-1" data-title="Foto Profil" title="Foto Profil">
                                            <img src="<?= $base_url; ?>public/assets/dist/img/foto/<?= $row->foto; ?>" style="width:100px;height:100px;" class="img-fluid">
                                        </a>
                                        <a href="<?= $base_url; ?>public/assets/dist/img/foto_fullbody/<?= $row->foto_fullbody; ?>" data-lightbox="image-1" data-title="Foto Full Body">
                                            <img src="<?= $base_url; ?>public/assets/dist/img/foto_fullbody/<?= $row->foto_fullbody; ?>" style="width:100px;height:100px;" class="img-fluid" title="Foto Full body">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>