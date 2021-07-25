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
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><a href="data_pendaftar_kecamatan"><i class="fas fa-arrow-circle-left"></i></a>&nbsp; Daftar Peserta</h3>
                    </div>
                    <form action="" method="POST">
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
                                        <input type="text" name="ukuran_celana" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="text-sm">Ukuran Sepatu</label>
                                        <br>
                                        <input type="text" name="ukuran_sepatu" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-sm">Alamat</label>
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="text-sm">Nomor Handphone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm">+62</span>
                                    </div>
                                    <input type="text" name="berat" class="form-control" />
                                </div>
                            </div>
                        </div>
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