<?php //proses untuk halaman biodata pemesan
session_start();
require_once("config.php");

$idtiket = $_SESSION['idtiket'];
$idrand = $_SESSION['idrand'];
echo $idtiket . "-> ini id tiket";
echo "<br>";

$pemesan = $_POST['pemesan'];
echo $pemesan . "-> ini pemesan"; // ---------------------------------------- ini kota asal
echo "<br>";

$tpemesan = substr($pemesan, -3);
$tpemesan = strtoupper($tpemesan);
echo $tpemesan . "-> ini konversi pemesan untuk kode";
echo "<br>";

$emaill = $_POST['emaill'];
echo $emaill . "-> ini email"; // -------------------------------------- ini kota tujuan
echo "<br>";

$nohp = $_POST['nohp'];
echo $nohp . "-> ini no hp"; // ------------------------------- ini tgl berangkat
echo "<br>";

$tnohp = substr($nohp, -3);
echo $tnohp . "-> ini konversi nohp untuk kode";
echo "<br>";

$alamat = $_POST['alamat'];
echo $alamat . "-> ini alamat"; // ----------------------------------- ini jml tiket
echo "<br>";

$pnmp1 = $_POST['penumpang1'];
echo $pnmp1 . "-> ini penumpang 1"; // ----------------------------------- ini jml tiket
echo "<br>";

if (isset($_POST['penumpang2'])) {
    $pnmp2 = $_POST['penumpang2'];
    echo $pnmp2 . "-> ini penumpang 2"; // ----------------------------------- ini jml tiket
} else {
    echo $pnmp2 = "";
}
echo "<br>";

if (isset($_POST['penumpang3'])) {
    $pnmp3 = $_POST['penumpang3'];
    echo $pnmp3 . "-> ini penumpang 3"; // ----------------------------------- ini jml tiket
} else {
    echo $pnmp3 = "";
}
echo "<br>";

$ijam = $_SESSION['jam'];

$kdbooking = $idtiket . $tpemesan . $tnohp;
echo $kdbooking . "-> ini kode booking";

$tglberangkat = $_SESSION['tgl_berangkat'];

$idjamm = substr($kdbooking, 6, 2);
$jammm = mysqli_query($conn, "SELECT jam FROM tbjam WHERE id_jam = '$idjamm'");
$jammm = mysqli_fetch_array($jammm);
$jammm = $jammm[0];

$masuk = mysqli_query($conn, "INSERT INTO `travel`.`tbbooking` (`id_tiket`, `kode_booking`, `nama_pembooking`, `nama_penumpang`, `nama_penumpang2`, `nama_penumpang3`, `no_hp`, `email`, `id_rand`, `jam`)
VALUES ('$idtiket', '$kdbooking', '$pemesan', '$pnmp1', '$pnmp2', '$pnmp3', '$nohp', '$emaill', '$idrand', '$ijam')"); // menyimpan ke database tabel tbberangkat

$_SESSION['kdbooking'] = "$kdbooking";
$_SESSION['nmpemesan'] = "$pemesan";
$_SESSION['penumpang1'] = "$pnmp1";
$_SESSION['penumpang2'] = "$pnmp2";
$_SESSION['penumpang3'] = "$pnmp3";
$_SESSION['nohp'] = "$nohp";
header('location:../pembayaran.php');