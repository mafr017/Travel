<?php include('inc/config.php'); ?>
<!-- memanggil file config agar tetap bisa mengakses database-->
<!DOCTYPE html>
<html>

<head>
    <title>SISFOTRAVEL - Reservasi</title>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!--framework-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>

    <style>
    .konten {
        width: 600px;
        padding: 19px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
    }

    .normal-select {
        width: 258px;
    }

    table td {
        vertical-align: middle;
    }
    </style>

    <script>
    $(function() { //fungsi untuk datepicker
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '+1d',
            endDate: '+1m'
        });
    });

    $(document).ready(function() { // fungsi untuk menghindari pemilihan kota yang sama
        $('#asal').change(function() {
            var asalid = $(this).val();
            $.ajax({
                type: 'POST', // Metode pengiriman data menggunakan POST
                url: 'inc/tujuan.php', // File yang akan memproses data
                data: 'namaasal=' + asalid, // Data yang akan dikirim ke file pemroses
                success: function(response) { // Jika berhasil
                    $('#tujuan').html(response); // tampilkan di input tujuan
                }
            });
        });
    });
    </script>
</head>

<body>
    <div class="konten">
        <h1 align="center">RESERVASI</h1>
        <form id="getid" action="inc/proses.php" method="post">
            <table align="center">
                <tr>
                    <td valign=top>Kota Asal</td>
                    <td>
                        <select name="asal" id="asal" class="normal-select" required>
                            <option value="" disabled selected>- Pilih Asal -</option>
                            <?php $tampil = mysqli_query($conn, "SELECT * FROM tbkota ORDER BY id ASC"); // menampilkan semua isi table
                            while ($t = mysqli_fetch_array($tampil)) {
                                echo "<option value='$t[kota]'>$t[kota]</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Kota Tujuan</td>
                    <td><select name="tujuan" id="tujuan" class="normal-select" required>
                            <option value="" disabled selected>- Pilih Tujuan -</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td valign=top>Tanggal Berangkat</td>
                    <td>
                        <input name="tgl_berangkat" id="tgl_berangkat" type="text" class="datepicker normal-select"
                            placeholder="Pilih Tanggal" autocomplete="off" required>
                    </td>
                </tr>

                <tr>
                    <td>Jumlah Tiket</td>
                    <td>
                        <select id="jml_tiket" name="jml_tiket" class="normal-select" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="submit" class="normal-select">
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <div class="progress">
            <div class="progress-bar" style="width:16.6%">16.6%</div>
        </div>
    </div>
</body>

</html>