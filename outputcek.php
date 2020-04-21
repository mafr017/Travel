<?php
include "inc/config.php";
session_start();
include "inc/cek.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL - Cek Booking</title>
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
        <h3>Cek Booking</h3>
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
                            echo $totalb = substr($totalb, 0, -3) . "." . substr($totalb, -3);
                            ?>,00</td>
                        <td colspan="2"><?php echo $stat; ?></td>
                    </tr>
                    <tr>
                        <th>Kode Booking</th>
                        <th>Kode Bayar</th>
                        <th>Batas Pembayaran</th>
                        <th>Kode OTP</th>
                    </tr>
                    <tr>
                        <td><?php echo $kodebook; ?></td>
                        <td><?php echo $kodebayar; ?></td>
                        <td><?php echo $btsb; ?> 21:12:21</td>
                        <td><?php echo $kodeotp; ?></td>
                    </tr>
                    <tr>
                        <th>Tujuan Keberangkatan</th>
                        <th colspan="2">Jam Keberangkatan</th>
                        <th>Penumpang</th>
                    </tr>
                    <tr>
                        <td><?php echo $ktasal; ?></td>
                        <td colspan="2"><?php echo $jamm; ?></td>
                        <td><?php echo $jmlpenumpang; ?> Orang</td>
                    </tr>
                    <tr>
                        <th>Asal Keberangkatan</th>
                        <th colspan="2">Tanggal Keberangkatan</th>
                        <th>Harga</th>
                    </tr>
                    <tr>
                        <td><?php echo $kttujuan; ?></td>
                        <td colspan="2"><?php echo $tglber; ?></td>
                        <td>Rp. <?php echo $kharga = substr($kharga, 0, -3) . "." . substr($kharga, -3);
                                ?>,00
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Data Penumpang<h5>
                        </td>
                    </tr>
                    <?php
                    if ($jmlpenumpang == 3) {
                        $hi2 = "";
                        $hi3 = "";
                    } else if ($jmlpenumpang == 2) {
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
                        <td><?php echo $penum1; ?></td>
                        <td <?php echo $hi2; ?>><?php echo $penum2; ?></td>
                        <td <?php echo $hi3; ?>><?php echo $penum3; ?></td>
                    </tr>
                </table>
                <div align="right"><a href="inc/batal.php"><input type="button" value="Batalkan Pemesanan"></a></div>
                <div align="right"><a href="index.php"><input type="button" value="Selesai"></a></div>
            </form>
        </div>
        <br>
    </div>
</body>

</html>