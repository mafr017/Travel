<?php //proses untuk halaman pilih tiket
session_start();
require_once("config.php");

$idjam = $_POST['formVar'];
echo $idjam . "<br>";

$ijam = mysqli_query($conn, "SELECT jam FROM tbjam WHERE id_jam = '$idjam'");
$ijam = mysqli_fetch_array($ijam);
$ijam = $ijam[0];
echo $ijam = substr($ijam, 0, -3);
echo "<br>";

$berangkat = $_SESSION['idberangkat'];
echo $berangkat . "<br>";

$idrand = $_SESSION['idrand'];
echo $idrand . "<br>";

$jmltiket = $_SESSION['jmltiket'];
echo $jmltiket . "<br>";

$idtiket = $berangkat . $idjam;

$masuk = mysqli_query($conn, "INSERT INTO `travel`.`tbketersediaan` (`id_tiket`, `id_jam`, `id_berangkat`, `jml_tiket`, `id_rand`) 
                        VALUES ('$idtiket', '$idjam', '$berangkat', '$jmltiket', '$idrand')"); // menyimpan ke database tabel tbketersediaan

$_SESSION['idtiket'] = "$idtiket";
$_SESSION['jam'] = "$ijam";
header('location:../kursi.php');