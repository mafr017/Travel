<?php
session_start(); // memulai session
session_destroy(); // mengakhiri sessio(menghapus data yang tersimpan)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISFOTRAVEL</title>
    <!-- library----------------------------------------------------------------------->
    <script src="js/jquery-3.4.1.min.js"></script>
    <link href="Main.css" rel="stylesheet" />
    <script src="jquery-1.10.2.min.js"></script>
    <script src="JavaScript%20Main.js"></script> <!-- library untuk parallax -->
    <!--- fungsi untuk text berjalan tab title ---------------------------------------->
    <script language='javascript'>
    var txt = ' SISFOTRAVEL - (Sistem Informasi Travel) 🚐 . . . . . . . . . . ';
    var speed = 170;
    var refresh = null;

    function move() {
        document.title = txt;
        txt = txt.substring(1, txt.length) + txt.charAt(0);
        refresh = setTimeout("move()", speed);
    }
    move();
    </script>
</head>

<body>
    <div id="main">
        <div id="mountainImg"><img src="img/la2.png" width="100%" /></div>
        <div id="logo"><img src="img/planyourvacation.png" /></div>
        <div id="mountainImg1"><img src="img/la1.png" width="100%" /></div>
        <nav>
            <div class="nav-wrapper">
                <h5><img src="img/WhatsApp Image 2019-07-02 at 10.25.50.png" class="loggo" /></h5>
                <a class="button" href="reservasi.php">Reservasi</a> <!-- button menuju hal reservasi-->
                <a class="button1" href="cekbooking.php">Cek Booking</a> <!-- button menuju hal cek booking-->
            </div>
        </nav>
    </div>
    <div class="content">
        <div class="content-wrapper">
            <div class="content-images">
                <div class="content-image-wrapper one">
                    <img src="img/Tempat-Wisata-di-Bandung-Gambar-Gedung-Sate-3.jpg" />
                    <h5>Bandung</h5>
                </div>
                <div class="content-image-wrapper two">
                    <img src="img/cianjur.png" />
                    <h5>Cianjur</h5>
                </div>
                <div class="content-image-wrapper three">
                    <img src="img/karawang.png" />
                    <h5>Karawang</h5>
                </div>
                <div class="content-image-wrapper four">
                    <img src="img/Monas-jakarta-tourism-go-id-640x427.jpg" />
                    <h5>Jakarta</h5>
                </div>
            </div>
            <p class="text">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen book. It has
                survived not only five centuries.Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a
                type specimen book.
            </p>
            <br>
            <a class="login" href="login.php">Login Staff</a> <!-- button menuju hal login staff-->
        </div>
    </div>
</body>

</html>