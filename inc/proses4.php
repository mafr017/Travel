<?php //proses untuk halaman Pembayaran
session_start();
require_once("config.php");

$idrand = $_SESSION['idrand'];
$hargaa = $_SESSION['hargas'];
$jmltiket = $_SESSION['jmltiket'];
$nohp = $_SESSION['nohp'];

$mtdbayar = $_POST['mtdbayar'];
$cari =  mysqli_query($conn, "SELECT kd_mtd FROM mtd_bayar WHERE pembayaran = '$mtdbayar'");
while ($j = mysqli_fetch_array($cari)) {
    $kd_mtd = $j['kd_mtd'];
}

$jmlbayar = $hargaa * $jmltiket;
if ($kd_mtd == 'G01') {
    $biayalayanan = 2500;
    $total = $jmlbayar + $biayalayanan;
} else if ($kd_mtd == 'G02') {
    $biayalayanan = 2500;
    $total = $jmlbayar + $biayalayanan;
} else if ($kd_mtd == 'V01') {
    $total = $jmlbayar;
} else if ($kd_mtd == 'V02') {
    $total = $jmlbayar;
} else if ($kd_mtd == 'V03') {
    $total = $jmlbayar;
}

$tglberangkat = $_SESSION['tgl_berangkat'];
$batas = new DateTime("$tglberangkat");
$batas->modify("-1 day");
$batask = $batas->format("Y-m-d");

$kd_otp = (rand(100000, 999999));

$status = "Belum Bayar";

//------------------------------------------------------------------
$kd_otpK = substr("$kd_otp", 2, 3);
$bataskk = substr("$batask", 5, -3) . substr("$batask", -2);
$knohp = substr("$nohp", -3);
$kd_pembayaran = $kd_otpK . $bataskk . $knohp;


echo $idrand . " -> ini id random <br>";
echo $kd_pembayaran . " -> ini kode pembayaran <br>";
echo $hargaa . " -> ini harga <br>";
echo $jmltiket . " -> ini jumlah tiket <br>";
echo $nohp . " -> ini nohp <br>";
echo $mtdbayar . " -> ini metode bayar <br>";
echo $kd_mtd . " -> ini kode metode bayar <br>";
echo $jmlbayar . " -> ini harga * jumlah tiket <br>";
echo $total . " -> ini total bayar <br>";
echo $tglberangkat . " -> ini tgl berangkat <br>";
echo $batask . " -> ini tanggal batas pembayaran <br>";
echo $kd_otp . " -> ini kode otp <br>";
echo $status . " -> ini status <br>";
echo $kd_otpK . " -> ini kode otp yang dikonversi <br>";
echo $bataskk . " -> ini batas tanggal yang dikonversi <br>";
echo $knohp . " -> ini no hp yang dikonversi <br>";

$resultt = mysqli_query($conn, "INSERT INTO `travel`.`tbpembayaran` (`id_rand`, `kode_bayar`, `harga`, `jml_tiket`, `no_hp`, `kd_mtd`, `total_bayar`, `tgl_batas`, `kode_otp`, `statusb`)
VALUES('$idrand', '$kd_pembayaran', '$hargaa', '$jmltiket', '$nohp', '$kd_mtd', '$total', '$batask', '$kd_otp', '$status') ");

$_SESSION['kdpembayaran'] = $kd_pembayaran;
$_SESSION['mtdb'] = $kd_mtd;
$_SESSION['total'] = $total;
$_SESSION['batasb'] = $batask;
$_SESSION['kdotp'] = $kd_otp;
$_SESSION['status'] = $status;
header("location:../cetak.php");