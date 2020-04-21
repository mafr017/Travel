<?php
include "inc/config.php"; // memanggil fungsi konek database dari file config
session_start(); // memulai sesi
$idtujuan = $_SESSION['idtujuan']; // mendapatkan data sementara dari page sebelumnya
$jmltiket = $_SESSION['jmltiket'];
$idberangkat = $_SESSION['idberangkat'];
$kategorijam = $_SESSION['kategorijam'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL - Pilih Tiket</title>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--framework-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
    a.disabled {
        pointer-events: none;
        cursor: default;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3>Pilih Jam Keberangkatan</h3>
        <div class="card">
            <div>Keberangkatan Jam</div>
            <div><?php $jam = 1;
                    include "inc/jam.php"; //memanggil fungsi jam untuk menampilkan jam berdasarkan kategori ?></div>
            <div><?php include "inc/ketersediaan.php"; //memanggil fungsi ketersediaan untuk menampilkan berapa kursi yang tersedia
                    $jam = $idjam; ?></div>
            <div>Rp. <?php //fungsi untuk menampilkan harga tiket berdasarkan kota asal dan tujuan
                        $harga = mysqli_query($conn, "SELECT harga FROM tbtujuan WHERE id_tujuan = '$idtujuan'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                        echo $harga = substr($harga, 0, -3);
                        ?>.000,00</div>
            <div> <!-- fungsi untuk disabled button apabila kursi sudah penuh -->
                <a href="#" class="btn btn-dark <?php echo $disa; ?>"
                    onclick="document.myform.formVar.value='<?php echo $jam; ?>'; document.myform.submit(); return false">Pilih
                </a>
            </div>
        </div>
        <br>
        <div class="card">
            <div>Keberangkatan Jam</div>
            <div><?php $jam = 2;
                    include "inc/jam.php"; ?></div>
            <div><?php include "inc/ketersediaan.php";
                    $jam = $idjam; ?></div>
            <div>Rp. <?php echo $harga; // memanggil variabel harga ?>.000,00</div>
            <div>
                <a href="#" class="btn btn-dark <?php echo $disa; ?>"
                    onclick="document.myform.formVar.value='<?php echo $jam; ?>'; document.myform.submit(); return false">Pilih
                </a></div>
        </div>
        <br>
        <div class="card">
            <div>Keberangkatan Jam</div>
            <div><?php $jam = 3;
                    include "inc/jam.php"; ?></div>
            <div><?php include "inc/ketersediaan.php";
                    $jam = $idjam; ?></div>
            <div>Rp. <?php echo $harga; ?>.000,00</div>
            <div>
                <a href="#" class="btn btn-dark <?php echo $disa; ?>"
                    onclick="document.myform.formVar.value='<?php echo $jam; ?>'; document.myform.submit(); return false">Pilih
                </a></div>
        </div>
        <br>
    </div><!-- fungsi untuk disabled button apabila kursi sudah penuh -->
    <form method=post name="myform" action="inc/proses1.php" hidden>
        <input type="hidden" name="formVar" value="" hidden>
        <input type="submit" value="Send form!" hidden>
    </form>
    <br>
    <?php $_SESSION['harga'] = "$harga"; ?>
    <br>
    <div class="progress">
        <div class="progress-bar" style="width:33.2%">33.2%</div>
    </div>
</body>

</html>