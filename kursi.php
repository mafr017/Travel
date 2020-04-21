<?php
include "inc/config.php";
session_start();
$jmltiket = $_SESSION['jmltiket'];
$idtiket = $_SESSION['idtiket'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL - Kursi</title>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--framework-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
    .container label input[type="checkbox"] {
        display: none
    }
    </style>
</head>

<body>
    <div class="container">
        <h3>Pilih Kursi</h3>
        <div class="card">
            <form method=post id="poll" name="poll" action="inc/proses2.php">
                <table>
                    <tr>
                        <td><input type="checkbox" id="kursi1" name="kursi1" value="1" <?php $kku = 1;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>1
                        </td>
                        <td><input type="checkbox" id="kursi2" name="kursi2" value="2" <?php $kku = 2;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>2
                        </td>
                        <td>Supir</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="checkbox" id="kursi3" name="kursi3" value="3" <?php $kku = 3;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>3
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="kursi4" name="kursi4" value="4" <?php $kku = 4;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>4
                        </td>
                        <td><input type="checkbox" id="kursi5" name="kursi5" value="5" <?php $kku = 5;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>5
                        </td>
                        <td><input type="checkbox" id="kursi6" name="kursi6" value="6" <?php $kku = 6;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>6
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="kursi7" name="kursi7" value="7" <?php $kku = 7;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>7
                        </td>
                        <td><input type="checkbox" id="kursi8" name="kursi8" value="8" <?php $kku = 8;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>8
                        </td>
                        <td><input type="checkbox" id="kursi9" name="kursi9" value="9" <?php $kku = 9;
                                                                                        include "inc/avakursi.php";
                                                                                        echo $disa; ?>>9
                        </td>
                    </tr>
                </table>
                <input id="sub1" class="next_button" type="submit" value="Send form!">
            </form>
        </div>
        <br>
        <div class="progress">
            <div class="progress-bar" style="width:49.8%">49.8%</div>
        </div>
    </div>
</body>
<script>
var elems = $('#poll input[type="checkbox"]');
$('input[type="submit"]').hide();
elems.on('change', function() {
    var limit = "<?php echo $jmltiket; ?>";
    _check = elems.filter(':checked').length;
    if (_check == limit) {
        $('input[type="submit"]').show();
    } else if (_check > limit) {
        alert("You can only select a maximum of " + limit + " checkboxes")
        this.checked = false;
    } else {
        $('input[type="submit"]').hide();
    }
});
</script>

</html>