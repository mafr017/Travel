<?php
require_once("config.php");
$idjam = mysqli_query($conn, "SELECT id_jam FROM tbjam WHERE pilih_jam = '$kategorijam' AND indexx = $jam");
$idjam = mysqli_fetch_array($idjam);
$idjam = $idjam[0];
$kkk = mysqli_query($conn, "SELECT jml_tiket FROM tbketersediaan WHERE id_berangkat = '$idberangkat' AND id_jam ='$idjam'");
$kursi = 0;
while ($t = mysqli_fetch_array($kkk)) {
    $kursi = $kursi + $t['jml_tiket'];
}
$kursi = 9 - $kursi;
if ($kursi == 0) {
    echo "Kursi sudah penuh!";
    $dis = "disabled";
} else {
    echo "Tersedia " . $kursi . " kursi";
    if ($kursi < $jmltiket) {
        $dis = "disabled";
    } else {
        $dis = "";
    }
}
$disa = $dis;