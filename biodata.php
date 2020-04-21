<?php
include "inc/config.php";
session_start();
$jmltiket = $_SESSION['jmltiket'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL - Biodata</title>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--framework-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3>Informasi Penumpang</h3>
        <div class="card">
            <table>
                <form method="post" id="mform" name="mform" action="inc/proses3.php">
                    <tr>
                        <td><label for="namapemesan">Nama Pemesan</label></td>
                        <td><label for="email">Email</label></td>
                    </tr>
                    <tr>
                        <td><input required minlength="3" type="text" id="pemesan" name="pemesan"></td>
                        <td><input required type="email" id="emaill" name="emaill"></td>
                    </tr>
                    <tr>
                        <td><label for="nohp">No. Handphone</label></td>
                        <td><label for="alamat">Alamat</label></td>
                    </tr>
                    <tr>
                        <td><input minlength="11" required type="tel" id="nohp" name="nohp"></td>
                        <td><input required type="text" id="alamat" name="alamat"></td>
                    </tr>
                    <tr>
                        <td><label for="namapenumpang1">Nama Penumpang 1</label></td>
                        <td><label for="namapenumpang2">Nama Penumpang 2</label></td>
                    </tr>
                    <tr>
                        <td><input minlength="3" required type="text" id="penumpang1" name="penumpang1"></td>
                        <td><input minlength="3" required type="text" id="penumpang2" name="penumpang2" <?php if ($jmltiket == 1) {
                                                                                                            echo "disabled";
                                                                                                        } ?>></td>
                    </tr>
                    <tr>
                        <td><label for="namapenumpang3">Nama Penumpang 3</label></td>
                        <td rowspan="2"><input type="checkbox" id="cekpenumpang" name="cekpenumpang" value="true"
                                onchange="kopitext();">
                            Penumpang adalah Pemesan</td>
                    </tr>
                    <tr>
                        <td><input required type="text" id="penumpang3" name="penumpang3" <?php if ($jmltiket < 3) {
                                                                                                echo "disabled";
                                                                                            } ?>></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br></td>
                    </tr>
                    <tr>
                        <td><input id="sub1" class="next_button" type="submit" value="Send form!"></td>
                    </tr>
                </form>
            </table>
        </div>
        <br>
        <div class="progress">
            <div class="progress-bar" style="width:66.4%">66.4%</div>
        </div>
    </div>
</body>

<script>
function kopitext() {
    var cb1 = document.getElementById('cekpenumpang');
    var tb1 = document.getElementById('pemesan');
    var tbc1 = document.getElementById('penumpang1');
    if (cb1.checked) {
        tbc1.value = tb1.value;
        $("#penumpang1").prop("readonly", true);
    } else {
        tbc1.value = "";
        $("#penumpang1").prop("readonly", false);
    }
}
</script>

</html>