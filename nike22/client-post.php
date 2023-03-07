<?php
error_reporting(0);
session_start();
include "koneksi.php";
if(!$_SESSION['KodKam']){
    header("Location: index.php");
}
$kodeKmr = $_SESSION['KodKam'];
$kodeBookings = $_SESSION['KodBook'];
$query = "SELECT * FROM dataKamar WHERE kodeKamar = '$kodeKmr'";

$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);


$queryes = "SELECT * FROM dataHotel ORDER BY RAND() LIMIT 1";
$sqlo = mysqli_query($conn, $queryes);
$rows = mysqli_fetch_array($sqlo);
$queryea = "SELECT * FROM dataHotel ORDER BY RAND() LIMIT 1";
$sqlos = mysqli_query($conn, $queryea);
$rowsy = mysqli_fetch_array($sqlos);
$queryeay = "SELECT * FROM dataHotel ORDER BY RAND() LIMIT 1";
$sqlosy = mysqli_query($conn, $queryeay);
$rowsyo = mysqli_fetch_array($sqlosy);
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Hotel Kennie - Booking kamar mudah 100% terpercaya.</title>
    <link rel="stylesheet" href="styleser.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="cssico/ardesico.css" type="text/css" media="all" />
    <link rel="stylesheet" href="nav.css">
    <script type="text/javascript">
    
        document.addEventListener("DOMContentLoaded", function() {

            window.addEventListener('scroll', function() {

                if (window.scrollY > 200) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
        // DOMContentLoaded  end
    </script>
    <style type="text/css" media="all">
        .h-30 {
            height: 370px;
        }
        .cover {
            object-fit: cover;
        }
        .filter {
            filter: brightness(70%);
        }
        .image-header {
            position: relative;
        }
        .text-wrappes {
            position: absolute;
            top: 80px;
            left: 50px;
        }
        .max {
            max-width: 1200px;
        }
        .w-65 {
            max-width: 65%;
        }
        .bg-none {
            background-color: transparent;
        }
        .border-none {
            border: none;
        }
        .w-5 {
            max-width: 7.5%;
        }
        .over {
            overflow-y: auto;
            overflow-x: hidden;
            height: 78vh;
        }
        #openForm {
            position: fixed;
            top: 50px;
            left: 290px;
            right: 290px;
            bottom: 70px;
            z-index: 1030;
            background-color: #fff;
            padding: 25px;
            box-shadow: 0 0 25px rgba(0,0,0,0.2);
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            display: none;
        }
        .posin {
            position: absolute;
            right: 10px;
            top: 10px;
        }
        .posin i {
            font-size: 30px;
        }
    </style>
</head>
<body class="max mx-auto">
<section id="wrappes w-1200 mx-auto ">
        <nav id="navbar_top" class="z-1031 max mx-auto navbar w-1200 mx-auto navbar-expand-lg navbar-dark bg-primary-2">
           
            <a class="navbar-brand text-white" href="#">
                Hotel Kennie
            </a>

            <div class="">
                <ul class="position-nav1 d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="portofolio.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fasilitas.php">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kamar.php">Kamar</a>
                    </li>
                </ul>
            </div>
  
           
        </nav>
    </section>
    <section id="main-wrappes">
        <div class="image-header">
            <img width="100%" class="cover h-30" src="proses/gambar/<?php echo $row['fotoKamar']; ?>" alt="" />
        </div>
    </section>
    <section id="mainWrappesY">
        <div class="col-12">
            <div class="row">
                <div class="col-md-4 col-lg-4 p-2">
                    <div class="card bg-none border-nonr">
                        <img class="cover radius-1" src="proses/gambar/<?php echo $rows['fotoHotel']; ?>" alt="" width="100%" height="210"/>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 p-2">
                    <div class="card bg-none border-nonr">
                        <img class="cover radius-1" src="proses/gambar/<?php echo $rowsyo['fotoHotel']; ?>" alt="" width="100%" height="210"/>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 p-2">
                    <div class="card bg-none border-nonr">
                        <img class="cover radius-1" src="proses/gambar/<?php echo $rowsy['fotoHotel']; ?>" alt="" width="100%" height="210"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center my-4">
        <div class="col-10 mx-auto">
            <h1 class="h3">Informasi</h1>
            <p class="alert-success alert">
                Kamar berhasil di pesan.  Pesanan <span><?php echo $_SESSION['KodBook'];?></span> Silahkan tunjukan pada Resepsionis kami untuk faktur berikut.
            </p>
            <p>
                <form action="proses/bookingSukses.php" method="post">
                <input type="hidden" name="fotoHotel" class="form-control w-100" value="<?php echo $row['fotoKamar']; ?>" />
                <input type="hidden" name="kodeKamares" class="form-control w-100" value="<?php echo $kodeBookings; ?>" />
                <button class="btn btn-primary" type="submit">Download Faktur Bukti</button>
                </form>
            </p>
        </div>
    </section>
    <script src="js/slim.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/popper.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period,
                10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };

    </script>
</body>
</html>