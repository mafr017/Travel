<?php
require_once("config.php");
$cjam = mysqli_query($conn, "SELECT jam FROM tbjam WHERE pilih_jam = '$kategorijam' AND indexx = $jam");
$cjam = mysqli_fetch_array($cjam);
$cjam = $cjam[0];
echo $cjam = substr($cjam, 0, -3);
//mendapatkan jam berdasarkan id jam yang sudah ditentukan