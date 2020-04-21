<?php //proses untuk halaman reservasi
session_start(); // memulai sesi
require_once("config.php"); // memanggil fungsi konek database dari file config

$asal = $_POST['asal'];
echo $asal; // ---------------------------------------- ini kota asal
echo "<br>";

$tujuan = $_POST['tujuan'];
echo $tujuan; // -------------------------------------- ini kota tujuan
echo "<br>";

$tgl_berangkat = $_POST['tgl_berangkat'];
echo $tgl_berangkat; // ------------------------------- ini tgl berangkat
echo "<br>";

$jml_tiket = $_POST['jml_tiket'];
echo $jml_tiket; // ----------------------------------- ini jml tiket
echo "<br>";

$tampil = mysqli_query($conn, "SELECT * FROM tbtujuan WHERE asal = '$asal' AND tujuan='$tujuan'");
while ($t = mysqli_fetch_array($tampil)) {
    $idtujuan = $t['id_tujuan'];
}
echo $idtujuan; // ------------------------------------ ini id asal-tujuan
echo "<br>";
$tgldpn = substr($tgl_berangkat, 5, -3) . substr($tgl_berangkat, 8);
echo $tgldpn; // -------------------------------------- ini tgl yang dikonversi
echo "<br>";

$idberangkat = $idtujuan . $tgldpn;
echo $idberangkat; // --------------------------------- ini id berangkat
echo "<br>";

$jamberangkat =  mysqli_query($conn, "SELECT pilih_jam FROM tbtujuan WHERE id_tujuan = '$idtujuan'");
while ($j = mysqli_fetch_array($jamberangkat)) {
    $kategorijam = $j['pilih_jam'];
}
echo $kategorijam; // --------------------------------- ini kategori jam
echo "<br>";

$idrand = (rand(100000, 999999));
echo $idrand; // ----------------------------------------ini id random untuk ber relasi ke tabel lain
echo "<br>";

$masuk = mysqli_query($conn, "INSERT INTO `travel`.`tbberangkat` (`id_berangkat`, `id_tujuan`, `tgl_berangkat`, `jml_tiket`, `id_rand`) 
                        VALUES ('$idberangkat', '$idtujuan', '$tgl_berangkat', '$jml_tiket', '$idrand')"); // menyimpan ke database tabel tbberangkat

// sesi untuk menyimpan data sementara supaya bisa digunakan di page selanjutnya
$_SESSION['asal'] = "$asal";
$_SESSION['tujuan'] = "$tujuan";
$_SESSION['idberangkat'] = "$idberangkat";
$_SESSION['idtujuan'] = "$idtujuan";
$_SESSION['kategorijam'] = "$kategorijam";
$_SESSION['jmltiket'] = "$jml_tiket";
$_SESSION['tgl_berangkat'] = "$tgl_berangkat";
$_SESSION['idrand'] = "$idrand";
header('location:../tiket.php'); // mengarahkan ke page tiket