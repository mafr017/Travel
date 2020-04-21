<?php //proses untuk halaman pilih kursi
session_start();
require_once("config.php");

$jmltiket = $_SESSION['jmltiket'];
$idtiket = $_SESSION['idtiket'];
$idrand = $_SESSION['idrand'];

if (isset($_POST['kursi1'])) {
    echo $kursi1 = $_POST['kursi1'];
    $idkursi = $idtiket . $kursi1;
    $masuk1 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi1', '$idrand')");
}
if (isset($_POST['kursi2'])) {
    echo " " . $kursi2 = $_POST['kursi2'];
    $idkursi = $idtiket . $kursi2;
    $masuk2 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi2', '$idrand')");
}
if (isset($_POST['kursi3'])) {
    echo " " . $kursi3 = $_POST['kursi3'];
    $idkursi = $idtiket . $kursi3;
    $masuk3 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi3', '$idrand')");
}
if (isset($_POST['kursi4'])) {
    echo " " . $kursi4 = $_POST['kursi4'];
    $idkursi = $idtiket . $kursi4;
    $masuk4 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi4', '$idrand')");
}
if (isset($_POST['kursi5'])) {
    echo " " . $kursi5 = $_POST['kursi5'];
    $idkursi = $idtiket . $kursi5;
    $masuk5 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi5', '$idrand')");
}
if (isset($_POST['kursi6'])) {
    echo " " . $kursi6 = $_POST['kursi6'];
    $idkursi = $idtiket . $kursi6;
    $masuk6 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi6', '$idrand')");
}
if (isset($_POST['kursi7'])) {
    echo " " . $kursi7 = $_POST['kursi7'];
    $idkursi = $idtiket . $kursi7;
    $masuk7 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi7', '$idrand')");
}
if (isset($_POST['kursi8'])) {
    echo " " . $kursi8 = $_POST['kursi8'];
    $idkursi = $idtiket . $kursi8;
    $masuk8 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi8', '$idrand')");
}
if (isset($_POST['kursi9'])) {
    echo " " . $kursi9 = $_POST['kursi9'];
    $idkursi = $idtiket . $kursi9;
    $masuk9 = mysqli_query($conn, "INSERT INTO `travel`.`tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES ('$idkursi', '$idtiket', '$kursi9', '$idrand')");
}
echo "<br>" . $jmltiket;
echo "<br>" . $idtiket;
header('location:../biodata.php');