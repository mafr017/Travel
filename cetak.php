<?php
include "inc/config.php";
session_start();
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
        <h3>Transaksi Berhasil!</h3>
        <div class="card">
            <form id="maform" name="maform" action="">
                <br>
                <table align="center" width="1000px">
                    <tr>
                        <th colspan="2">Total Bayar</th>
                        <th colspan="2">Status Pembayaran</th>
                    </tr>
                    <tr>
                        <td colspan="2">Rp.
                            <?php
                            $total = $_SESSION['total'];
                            echo $total = substr($total, 0, -3) . "." . substr($total, -3);
                            ?>,00</td>
                        <td colspan="2"><?php echo $_SESSION['status']; ?></td>
                    </tr>
                    <tr>
                        <th>Kode Booking</th>
                        <th>Kode Bayar</th>
                        <th>Batas Pembayaran</th>
                        <th>Kode OTP</th>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION['kdbooking']; ?></td>
                        <td><?php echo $_SESSION['kdpembayaran']; ?></td>
                        <td><?php echo $_SESSION['batasb']; ?> 21:12:21</td>
                        <td><?php echo $_SESSION['kdotp']; ?></td>
                    </tr>
                    <tr>
                        <th>Tujuan Keberangkatan</th>
                        <th colspan="2">Jam Keberangkatan</th>
                        <th>Penumpang</th>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION['asal']; ?></td>
                        <td colspan="2"><?php echo $_SESSION['jam']; ?></td>
                        <td><?php echo $jml_tiket = $_SESSION['jmltiket']; ?> Orang</td>
                    </tr>
                    <tr>
                        <th>Asal Keberangkatan</th>
                        <th colspan="2">Tanggal Keberangkatan</th>
                        <th>Harga</th>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION['tujuan']; ?></td>
                        <td colspan="2"><?php echo $_SESSION['tgl_berangkat']; ?></td>
                        <td>Rp.
                            <?php
                            $harga = $_SESSION['hargas'];
                            echo $harga = substr($harga, 0, -3) . "." . substr($harga, -3);
                            ?>,00
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Data Penumpang<h5>
                        </td>
                    </tr>
                    <?php
                    if ($jml_tiket == 3) {
                        $hi2 = "";
                        $hi3 = "";
                    } else if ($jml_tiket == 2) {
                        $hi2 = "";
                        $hi3 = "hidden='true'";
                    } else {
                        $hi2 = "hidden='true'";
                        $hi3 = "hidden='true'";
                    }
                    ?>
                    <tr>
                        <th>Nama Penumpang 1</th>
                        <th <?php echo $hi2; ?>>Nama Penumpang 2</th>
                        <th <?php echo $hi3; ?>>Nama Penumpang 3</th>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION['penumpang1']; ?></td>
                        <td <?php echo $hi2; ?>><?php echo $_SESSION['penumpang2']; ?></td>
                        <td <?php echo $hi3; ?>><?php echo $_SESSION['penumpang3']; ?></td>
                    </tr>
                </table>
                <div align="right"><a href="index.php"><input type="button" value="Selesai"></a></div>
            </form>
        </div>
        <br>
        <div class="progress">
            <div class="progress-bar" style="width:100%">100%</div>
        </div>
    </div>
</body>

</html>