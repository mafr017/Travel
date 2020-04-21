<?php
include "inc/config.php";
session_start();
$jmltiket = $_SESSION['jmltiket'];
$idtujuan = $_SESSION['idtujuan'];
$pilih =  mysqli_query($conn, "SELECT harga FROM tbtujuan WHERE id_tujuan = '$idtujuan'");
while ($j = mysqli_fetch_array($pilih)) {
    $hargas = $j['harga'];
}
$_SESSION['hargas'] = $hargas;
$jmh = $hargas * $jmltiket;
$jmhk = substr($jmh, 0, -3) . "." . substr($jmh, -3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL - Pembayaran</title>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--framework-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $(document).on('click', 'input[name="mtdbayar"]', function() {
            if ($(this).val() == 'Indomaret') {
                var biayag = "2500";
                var bi = biayag.substr(0, 1) + "." + biayag.substr(1, 3);
                document.getElementById("demo").innerHTML = bi;
                var ttb = Number('<?php echo $jmh; ?>') + Number(biayag);
                var ttb = ttb.toString();
                var ttbk = ttb.slice(0, -3) + "." + ttb.slice(-3);
                document.getElementById("ttlb").innerHTML = ttbk;
            } else if ($(this).val() == 'Alfamart') {
                var biayag = "2500";
                var bi = biayag.substr(0, 1) + "." + biayag.substr(1, 3);
                document.getElementById("demo").innerHTML = bi;
                var ttb = Number('<?php echo $jmh; ?>') + Number(biayag);
                var ttb = ttb.toString();
                var ttbk = ttb.slice(0, -3) + "." + ttb.slice(-3);
                document.getElementById("ttlb").innerHTML = ttbk;
            } else {
                var biayava = "0";
                var nol = biayava;
                document.getElementById("demo").innerHTML = nol;
                var ttb = '<?php echo $jmhk; ?>';
                document.getElementById("ttlb").innerHTML = ttb;
            }
        });
    });
    </script>
</head>

<body>
    <div class="container">
        <h3>Pembayaran</h3>
        <div class="card">
            <td>
                <br>
                <h5>Pilih Metoda Pembayaran</h5>
                <br>
                <table>
                    <form method="post" id="mform" name="mform" action="inc/proses4.php">
                        <tr>
                            <th colspan="3">Virtual Account</th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="mtdbayar" value="Mandiri">Mandiri</td>
                            <td><input type="radio" name="mtdbayar" value="BCA">BCA</td>
                            <td><input type="radio" name="mtdbayar" value="BNI">BNI</td>
                        </tr>
                        <tr>
                            <th colspan="3">Gerai Retail</th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="mtdbayar" value="Alfamart">Alfamart
                            </td>
                            <td><input type="radio" name="mtdbayar" value="Indomaret">Indomaret
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><br></td>
                        </tr>
                        <tr>
                            <th colspan="3">Cara Pembayaran Menggunakan ...</th>
                        </tr>
                        <tr>
                            <td colspan="3">1. Pembayaran dapat dilakukan melalui Seluruh Gerai Alfamart.<br>2. Setelah
                                mensetujui Syarat & Ketentuan Anda akan mendapatkan Kode Pembayaran.</td>
                        </tr>
                        <tr>
                            <th colspan="3">Syarat & Ketentuan</th>
                        </tr>
                        <tr>
                            <td colspan="3">1. Dengan ini Anda menyatakan persetujuan terhadap Persyaratan dan Ketentuan
                                Angkutan Penumpang SISFOTRANS termasuk tetapi tidak terbatas ketentuan reservasi.<br>
                                2. Anda akan mematuhi persyaratan dan ketentuan Reservasi , termasuk pembayaran,
                                mematuhi semua aturan dan pembatasan mengenai ketersediaan tarif serta bertanggung jawab
                                untuk semua biaya yang timbul dari penggunaan fasilitas Reservasi Online Tiket
                                SISFOTRANS.</td>
                        </tr>
                        <tr>
                            <td colspan="3"><br></td>
                        </tr>
                        <tr>
                            <th colspan="2">Harga</th>
                            <td>Rp. <?php $hargas;
                                    echo $hargaa = substr($hargas, 0, -3); ?>.000,00</td>
                        </tr>
                        <tr>
                            <th colspan="2">Jumlah Tiket</th>
                            <td><?php echo $jmltiket; ?></td>
                        </tr>
                        <tr>
                            <th colspan="2">Biaya Layanan</th>
                            <td>Rp.
                                <a id="demo"></a>,00
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Total Bayar</th>
                            <td>Rp. <a id="ttlb"></a>,00</td>
                        </tr>
                        <tr>
                            <td colspan="3"><br></td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="submit" value="submit"></td>
                        </tr>
                </table>
                </form>
        </div>
        <br>
        <div class="progress">
            <div class="progress-bar" style="width:83%">83%</div>
        </div>
    </div>
</body>

</html>