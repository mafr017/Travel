<!DOCTYPE html>
<html>

<body>
    <?php
    session_start();
    require_once("inc/config.php");
    $cari = mysqli_query($conn, "SELECT id_login FROM tblogin WHERE username = 'al1234' AND paswd = 'driver1234'");
    $jml = mysqli_fetch_array($cari);
    echo $jml[0];
    ?>
</body>

</html>