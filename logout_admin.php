<?php
session_start();
$_SESSION = [];
session_destroy();
session_unset();
include 'base_url.php';
// Redirect to the login page:
?>
<script>
    document.location.href = '<?= $base_url; ?>admin/login';
</script>
<?php
?>