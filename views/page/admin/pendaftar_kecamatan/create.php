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
                    <li class="breadcrumb-item"><a href="<?= $base_url; ?>admin/pendaftar/kecamatan"><small>Pendaftar Kecamatan</small></a></li>
                    <li class="breadcrumb-item active"><small><?= $pageTitle; ?></small></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

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
                        <h3 class="card-title"><a href="<?= $base_url; ?>admin/pendaftar/kecamatan"><i class="fas fa-arrow-circle-left"></i></a>&nbsp; Form Pendaftaran Peserta</h3>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Nama Panggilan</label>
                                        <input type="text" name="nama_panggilan" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-sm">Domisili</label>
                                <select name="domisili" class="form-control select2" style="width: 100%;">
                                    <option value="0" hidden>--Pilih Domisili--</option>
                                    <?php
                                    $query = $mysqli->prepare("SELECT * FROM tb_provinsi");
                                    $query->execute();
                                    $result = $query->get_result();
                                    while ($row = $result->fetch_object()) {
                                        echo "
                                                <option value='$row->id'>$row->nama_provinsi</option>
                                            ";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Umur</label>
                                        <div class="input-group">
                                            <input type="number" name="umur" class="form-control" />
                                            <div class="input-group-append">
                                                <span class="input-group-text text-sm">Tahun</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Jenis Kelamin</label>
                                        <br>
                                        <div class="mt-1">
                                            <input type="radio" name="jenis_kelamin" id="Laki-laki" value="Laki-laki"> <label for="Laki-laki" class="text-sm" style="font-weight:normal;">Laki-laki</label>
                                            <input type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan" class="ml-2"> <label for="Perempuan" class="text-sm" style="font-weight:normal;">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Tinggi Badan</label>
                                        <div class="input-group">
                                            <input type="number" name="tinggi" class="form-control" />
                                            <div class="input-group-append">
                                                <span class="input-group-text text-sm">cm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-sm">Berat Badan</label>
                                        <div class="input-group">
                                            <input type="number" name="berat" class="form-control" />
                                            <div class="input-group-append">
                                                <span class="input-group-text text-sm">kg</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="text-sm">Ukuran Baju</label>
                                        <br>
                                        <div class="mt-1">
                                            <input type="radio" name="ukuran_baju" id="S" value="S"> <label for="S" class="text-sm" style="font-weight:normal;">Small</label>
                                            <input type="radio" name="ukuran_baju" id="M" value="M"> <label for="M" class="text-sm" style="font-weight:normal;">Medium</label>
                                            <input type="radio" name="ukuran_baju" id="L" value="L"> <label for="L" class="text-sm" style="font-weight:normal;">Large</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="text-sm">Ukuran Celana</label>
                                        <br>
                                        <input type="number" name="ukuran_celana" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="text-sm">Ukuran Sepatu</label>
                                        <br>
                                        <input type="number" name="ukuran_sepatu" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-sm">Alamat</label>
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-sm">Nomor Handphone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm"><i class="fas fa-phone-alt"></i></span>
                                            </div>
                                            <input type="number" name="nohp" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-sm">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm"><i class="far fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                    </div>     
                                </div>
        
                            </div>
                            <div class="form-group">
                                <label class="text-sm">Sosial Media</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm"><i class="fab fa-instagram"></i></span>
                                            </div>
                                                <input type="text" name="ig" class="form-control" />
                                        </div>  
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm"><i class="fab fa-facebook-square"></i></span>
                                            </div>
                                                <input type="text" name="fb" class="form-control" />
                                        </div>  
                                    </div>
                                </div>          
                            </div> 
                            
                            <div class="form-group">
                                <label class="text-sm">Pendidikan Terakhir</label>
                                <input type="text" name="pd_terakhir" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="text-sm">Prestasi 3 Tahun Terakhir</label>
                                    <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm">A.</span>
                                            </div>
                                            <input type="text" name="prestasi[]" class="form-control" />
                                    </div>
                                    <br>
                                    <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm">B.</span>
                                            </div>
                                            <input type="text" name="prestasi[]" class="form-control" />
                                    </div>
                                    <br>
                                    <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm">C.</span>
                                            </div>
                                            <input type="text" name="prestasi[]" class="form-control" />
                                    </div> 
                            </div>

                                
                            <div class="row">
                                <div class="col-sm-8">
                                    <label class="text-sm">Keahlian</label>
                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="Speaking" name="keahlian[]" value="Public Speaking">
                                                    <label for="Speaking" class="form-check-label">Public Speaking</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="Menyanyi" name="keahlian[]" value="Menyanyi">
                                                    <label for="Menyanyi" class="form-check-label">Menyanyi</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="Lisan" name="keahlian[]" value="Sastra Lisan Gorontalo">
                                                    <label for="Lisan" class="form-check-label">Sastra Lisan Gorontalo</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="Musik" name="keahlian[]" value="Bermain Alat Musik">
                                                    <label for="Musik" class="form-check-label">Bermain Alat Musik</label>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label class="text-sm">Keahlian Lainnya</label>
                                        <textarea class="form-control" name="keahlian_lainnya"></textarea>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="text-sm">Motivasi Menjadi Nou/Uti.</label>
                                <textarea class="form-control" name="motivasi"></textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="text-sm">Perwakilan</label>
                                    <select name="perwakilan" class="form-control select2" style="width: 100%;">
                                        <option value="0" hidden>--Pilih Kecamatan--</option>
                                        <?php
                                        $query = $mysqli->prepare("SELECT * FROM tb_kecamatan");
                                        $query->execute();
                                        $result = $query->get_result();
                                        while ($row = $result->fetch_object()) {
                                            echo "
                                                    <option value='$row->id'>$row->nama_kecamatan</option>
                                                ";
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-sm">Nama Perwakilan</label>
                                        <input type="text" name="nama_perwakilan" class="form-control" />
                                    </div>
                                </div>
                            </div>


                            <!-- uplod foto -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kt">Foto</label>
                                        <input type="file"  name="foto" class="form-control-file">
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kt">Foto Full Body</label>
                                        <input type="file"  name="foto_fullbody" class="form-control-file">
                                    </div>   
                                </div>
                            </div>            
                            <!-- end uplod foto -->

                        </div>
                        <!-- end card body -->



                        <div class="card-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>