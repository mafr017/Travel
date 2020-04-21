<?php
require_once("config.php");
$cekk = mysqli_query($conn, "SELECT id_kursi FROM tbkursi WHERE id_tiket = '$idtiket' AND no_kursi = '$kku'");
$cekk = mysqli_fetch_array($cekk);
$cekk = $cekk[0];
if (isset($cekk)) {
    $dis = "disabled";
} else {
    $dis = "";
}
$disa = $dis;