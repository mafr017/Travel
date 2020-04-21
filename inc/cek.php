<?php
$kdbook = $_SESSION['cekkode'];
$carikota = substr($kdbook, 0, 2);
$cariidjam = substr($kdbook, 6, 2);
$caritglber = substr($kdbook, 0, 6);

$cari4 = mysqli_query($conn, "SELECT * FROM tbbooking WHERE kode_booking = '$kdbook'");
while ($x = mysqli_fetch_array($cari4)) {
    $penum1 = $x['nama_penumpang'];
    $penum2 = $x['nama_penumpang2'];
    $penum3 = $x['nama_penumpang3'];
    $kodebook = $x['kode_booking'];
    $idrandom = $x['id_rand'];
    $jamm = $x['jam'];
}

$cari3 = mysqli_query($conn, "SELECT * FROM tbberangkat WHERE id_rand = '$idrandom'");
while ($w = mysqli_fetch_array($cari3)) {
    $tglber = $w['tgl_berangkat'];
}

$cari = mysqli_query($conn, "SELECT * FROM tbpembayaran WHERE id_rand = '$idrandom'");
while ($t = mysqli_fetch_array($cari)) {
    $totalb = $t['total_bayar'];
    $stat = $t['statusb'];
    $kodebayar = $t['kode_bayar'];
    $btsb = $t['tgl_batas'];
    $kodeotp = $t['kode_otp'];
    $jmlpenumpang = $t['jml_tiket'];
    $kharga = $t['harga'];
}
$cari1 = mysqli_query($conn, "SELECT * FROM tbtujuan WHERE id_tujuan = '$carikota'");
while ($u = mysqli_fetch_array($cari1)) {
    $ktasal = $u['asal'];
    $kttujuan = $u['tujuan'];
}
$idra = $idrandom;
$_SESSION['idrandom'] = $idra;