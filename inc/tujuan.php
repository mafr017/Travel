<?php
include('config.php');

$tampil = mysqli_query($conn, "SELECT * FROM tbkota WHERE kota!='$_POST[namaasal]'");
$jml = mysqli_num_rows($tampil);
if ($jml > 0) {
    while ($r = mysqli_fetch_array($tampil)) {
        echo "<option value=$r[kota]>$r[kota]</option>";
    }
} else {
    echo "<option selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option>";
}