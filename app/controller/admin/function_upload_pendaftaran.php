<?php
function upload_foto()
    {
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];

        // cek apakah tidak ada gambar yang di upload
        if($error === 4) {
            echo "
                <script>
                    alert('pilih gambar terlebih dahulu');
                </script>
            ";
            return false;
        }

        // cek apakah yang di upload gambar
        $extensiGambarValid = ['jpg','png','jpeg'];
        $extensiGambar = explode('.', $namaFile);
        $extensiGambar = strtolower(end($extensiGambar));
        if(!in_array($extensiGambar, $extensiGambarValid)) {
            echo "
                <script>
                    alert('yang anda upload bukan gambar!');
                </script>
            ";
            return false;
        }

        // cek ukuran file gambar
        if($ukuranFile > 2000000) {
            echo "
                <script>
                    alert('ukuran gambar terlalu besar!');
                </script>
            ";
            return false;
        }
        // generate nama gambar baru
        $cakacakacak = uniqid(microtime(true));
        $namaFileBaru = $cakacakacak;
        $namaFileBaru .= '.';
        $namaFileBaru .= $extensiGambar;

        // jika lolos pengecekan
        move_uploaded_file($tmpName, 'public/assets/dist/img/foto/' . $namaFileBaru);
        return $namaFileBaru;
    }

function upload_foto_fullbody()
    {
        $namaFile = $_FILES['foto_fullbody']['name'];
        $ukuranFile = $_FILES['foto_fullbody']['size'];
        $error = $_FILES['foto_fullbody']['error'];
        $tmpName = $_FILES['foto_fullbody']['tmp_name'];

        // cek apakah tidak ada gambar yang di upload
        if($error === 4) {
            echo "
                <script>
                    alert('pilih gambar terlebih dahulu');
                </script>
            ";
            return false;
        }

        // cek apakah yang di upload gambar
        $extensiGambarValid = ['jpg','png','jpeg'];
        $extensiGambar = explode('.', $namaFile);
        $extensiGambar = strtolower(end($extensiGambar));
        if(!in_array($extensiGambar, $extensiGambarValid)) {
            echo "
                <script>
                    alert('yang anda upload bukan gambar!');
                </script>
            ";
            return false;
        }

        // cek ukuran file gambar
        if($ukuranFile > 2000000) {
            echo "
                <script>
                    alert('ukuran gambar terlalu besar!');
                </script>
            ";
            return false;
        }
        // generate nama gambar baru
        $cakacakacak = uniqid(microtime(true));
        $namaFileBaru = $cakacakacak;
        $namaFileBaru .= '.';
        $namaFileBaru .= $extensiGambar;

        // jika lolos pengecekan
        move_uploaded_file($tmpName, 'public/assets/dist/img/foto_fullbody/' . $namaFileBaru);
        return $namaFileBaru;
    }


?>