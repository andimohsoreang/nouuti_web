<?php
include 'app/token.php';

if (isset($_POST['auth'])) {
    if (empty($_POST['username']) && empty($_POST['password'])) {
    ?>
        <script>
            alert('Maaf masukkan Username dan Password terlebih dahulu !');
            document.location.href = '<?= $base_url; ?>admin/login';
        </script>
    <?php
        return false;
    }

    $stmt_admin = $mysqli->prepare("SELECT id_admin, nama_admin, pass FROM tb_admin WHERE username = ?");
  
    if ($stmt_admin) {
        $stmt_admin->bind_param('s', $_POST['username']);
        $stmt_admin->execute();
        $stmt_admin->store_result();

        if ($stmt_admin->num_rows > 0) {
            $stmt_admin->bind_result($id_admin, $nama_admin, $pass);
            $stmt_admin->fetch();
            if (password_verify($_POST['password'], $pass)) {
                session_regenerate_id();

                $token = getToken(10);
                $checkToken = "SELECT * FROM tb_token_admin WHERE username='{$_POST['username']}'";
                $toCheckToken = $mysqli->prepare($checkToken);
                $toCheckToken->execute();
                $resultToken = $toCheckToken->get_result();
                $rowToken = mysqli_num_rows($resultToken);

                if ($rowToken > 0) {
                    $stmt_log = $mysqli->prepare("UPDATE tb_token_admin SET token='$token' WHERE username='{$_POST['username']}'");
                    $stmt_log->execute();
                } else {
                    $stmt_log = $mysqli->prepare("INSERT INTO tb_token_admin (username,token) VALUES ('{$_POST['username']}','$token')");
                    $stmt_log->execute();
                }
                $_SESSION['unique_user'] = $id_admin;
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['nama'] = $nama_admin;
                $_SESSION['token'] = $token;
                $_SESSION['type_user'] = "admin";
                ?>
                <script>
                    document.location.href = '<?= $base_url ?>admin';
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert('Password yang anda masukkan salah !');
                    document.location.href = '<?= $base_url ?>admin/login';
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert('Username yang anda masukkan salah !');
                document.location.href = '<?= $base_url; ?>admin/login';
            </script>
            <?php
        }
        $stmt_admin->close();
    }
}
?>