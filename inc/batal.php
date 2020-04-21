<?php
session_start();
require_once("config.php");
$idrand = $_SESSION['idrandom'];
$idrand1 = $idrand;
$idrand2 = $idrand;
$idrand3 = $idrand;
$idrand4 = $idrand;
$hapus = mysqli_query($conn, "DELETE FROM tbpembayaran WHERE id_rand ='$idrand'");
$hapus1 = mysqli_query($conn, "DELETE FROM tbbooking WHERE id_rand ='$idrand1'");
$hapus2 = mysqli_query($conn, "DELETE FROM tbkursi WHERE id_rand = '$idrand2'");
$hapus3 = mysqli_query($conn, "DELETE FROM tbketersediaan WHERE id_rand = '$idrand3'");
$hapus4 = mysqli_query($conn, "DELETE FROM tbberangkat WHERE id_rand = '$idrand4'");

echo "berhasil dibatalkan!";
session_destroy();
header('location:../index.php');