<?php
    if (isset($_GET['views_admin']) && $_GET['views_admin'] == "admin_beranda") {
        $title = 'Beranda';
        $pageTitle = 'Beranda';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "data_operator") {
        $title = 'Data Operator';
        $pageTitle = 'Data Operator';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "data_kecamatan") {
        $title = 'Data Kecamatan';
        $pageTitle = 'Data Kecamatan';
    }else {
        $title = 'Beranda';
        $pageTitle = 'Beranda';
    }
?>

<?php
include 'views/layout/admin/header.php';
include 'views/layout/admin/navbar.php';
include 'views/layout/admin/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<?php
    if (isset($_GET['views_admin']) && $_GET['views_admin'] == "admin_beranda") {
        include 'views/page/admin/admin_beranda.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "data_operator") {
        include 'views/page/admin/data_operator.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "data_kecamatan") {
        include 'views/page/admin/data_kecamatan.php'; 
    } else {
        include 'views/page/admin/admin_beranda.php';
    }
?>
</div>
<?php 
include 'views/layout/admin/footer.php';
?>
<!-- /.content-wrapper -->