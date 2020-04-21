<?php
session_start();
require_once("inc/config.php");

if (isset($_POST['login'])) {
    $usr = $_POST['username'];
    $psw = $_POST['password'];
    $cari = mysqli_query($conn, "SELECT id_login FROM tblogin WHERE username = '$usr' AND paswd = '$psw'");
    $jml = mysqli_fetch_array($cari);
    $cek = $jml[0];
    if ($cek == "driver") {
        $_SESSION['username'] = $usr;
        header("Location:lapdriver.php");
    } else if ($cek == "kepala") {
        $_SESSION['username'] = $usr;
        header("Location:lapkepala.php");
    } else {
        $pesanerror = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL - Cetak</title>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--framework-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3>Login Staff</h3>
        <div class="card">
            <?php if (isset($pesanerror)) : ?>
            <p style="color: red">Username atau Password salah!</p>
            <?php endif; ?>
            <form id="maform" name="maform" method="post" action="">
                <div><label for="username">Username</label></div>
                <div><input type="username" id="username" name="username" required></div>
                <div><label for="password">Password</label></div>
                <div><input type="password" id="password" name="password" required></div><br>
                <div><input type="submit" id="login" name="login" value="Login"></div><br>
            </form>
        </div>
    </div>
</body>

</html>