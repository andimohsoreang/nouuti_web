<?php
session_start();
include 'base_url.php';

if (!isset($_SESSION['unique_user'])) {
?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = '<?= $base_url; ?>admin/login';
    </script>
<?php
    return false;
}

if (isset($_SESSION['unique_user']) && $_SESSION['type_user'] != "admin") {
?>
    <script>
        window.location.href = '<?= $base_url; ?>admin/login';
    </script>
<?php
    return false;
}

include 'app/env.php';
include 'views/page/admin/index.php';
