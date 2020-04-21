<?php
session_start();
require_once("inc/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL - Laporan Travel</title>
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
        <h3>Laporan Travel</h3>
        <a href="inc/logout.php"><input type="button" name="logout" id="logout" value="logout"></a>
        <div class="card">
            <h5>Laporan Travel</h5>
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Kode Booking</th>
                    <th>Kode Bayar</th>
                    <th>Tanggal Berangkat</th>
                    <th>Jam Berangkat</th>
                    <th>Jumlah Penumpang</th>
                    <th>Nama Pemesan</th>
                    <th>No. Telp</th>
                </tr>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM tbbooking INNER JOIN tbpembayaran ON tbbooking.id_rand = tbpembayaran.id_rand INNER JOIN tbberangkat ON tbbooking.id_rand = tbberangkat.id_rand");
                $i = 1;
                while ($test = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $test['kode_booking'] . "</td>";
                    echo "<td>" . $test['kode_bayar'] . "</td>";
                    echo "<td>" . $test['tgl_berangkat'] . "</td>";
                    echo "<td>" . $test['jam'] . "</td>";
                    echo "<td>" . $test['jml_tiket'] . "</td>";
                    echo "<td>" . $test['nama_pembooking'] . "</td>";
                    echo "<td>" . $test['no_hp'] . "</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>