<?php
session_start();
require_once("inc/config.php");

if (isset($_POST['cek'])) {
    $ckd = $_POST['cekkode'];
    $cari = mysqli_query($conn, "SELECT * FROM tbbooking WHERE kode_booking = '$ckd'");
    $cek = mysqli_num_rows($cari);
    if ($cek == 1) {
        $_SESSION['cekkode'] = $ckd;
        header("Location:outputcek.php");
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
        <div class="card">
            <?php if (isset($pesanerror)) : ?>
            <p style="color: red">Kode Tidak Ditemukan!</p>
            <?php endif; ?>
            <form id="maform" name="maform" method="post" action="">
                <div><label for="cekkode">Kode Booking</label></div>
                <div><input type="text" id="cekkode" name="cekkode" required></div><br>
                <div><input type="submit" id="cek" name="cek" value="Cek Kode"></div><br>
            </form>
        </div>
    </div>
</body>

</html>