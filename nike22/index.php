

<?php
error_reporting(0);
session_start();
$pesan = $_GET['pesan'];
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
    <script src="jquery.js"></script>
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
        <div class="image-header position-relative">
            <img width="100%" class="cover h-30 filter" src="images/bg-hotel.jpg" alt="" />
            <div class="text-wrappes text-white">
                <div class="card-title w-65">
                    <p>
                        <span class="text-warning">
                            <i class="ar ars-star"></i>
                            <i class="ar ars-star"></i>
                            <i class="ar ars-star"></i>
                            <i class="ar ars-star"></i>
                            <i class="ar ars-star"></i>
                        </span>
                    </p>
                    <h1 class="h2">Booking Hotel Fasilitas Bintang 5</h1>
                    <p>
                    Lepaskan diri anda ke Hotel  Kennie
                    Di kelilingi oleh keindahan laut yang sejuk dan indah
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="main" class="bg-light p-3">
        <div class="col-8 mx-auto">
            <div class="form-item">
                <div class="mx-3">
                    <div class="<?= $_SESSION['alerts-on']; ?>">
                        <?= $_SESSION['alerts']; ?>
                    </div>
                </div>
                <form action="proses/aksi.php" method="post">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="Check In">Check In</label>
                                <input type="date" name="checkIn" class="form-control"/>
                            </div>

                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="Check Out">Check Out</label>
                                <input type="date" name="checkOut" class="form-control" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="JumlahKamar">Jumlah Kamar</label>
                                <div class="row">
                                    <div class="col-8">
                                        <input type="text" name="jmlhkamar" class="form-control w-100" placeholder="Jumlah Kamar" />
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn tombol-simpan btn-primary bg-primary-2" name="pesan" >Pesan</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
   
    <section id="tentang" class="p-3">
        <div class="col-8 mx-auto">
            <div class="card-text text-center text-left">
                <h2 class="h3">Tentang Hotel</h2>
                <div class="mt-4">
                    <p>
                       Hotel Kennie merambah bisnis Hotel bintang empat dan lima untuk menyasar segmen yang gemar Staycation
                       Berdasarkan Cambdrige Dictionaty, Staycation adalah liburan yang di lakukan di dekat rumah atau jauh
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    <?php

if($pesan){
?>

    <?php 
    if($_SESSION['uuid']){
    $rand = $_SESSION['uuid'];
    $alert = $_SESSION['alert'];
    $alert1 = $_SESSION['alert1'];
    $alertOn = $_SESSION['alert-on'];
    $jmlTersedia = $_SESSION['jmlTersedia'];
    $checkIn = $_SESSION['checkLog1'];
    $checkOut = $_SESSION['checkLog2'];
    $jmlPesan = $_SESSION['jml'];
    ?>
<section id="openForm" class="over">
    <div class="form-items">
        <div class="py-3 position-relative">
            <h3 class="h5">Formulir Pendaftaran</h3>
            <span onclick="closeModal1()" class="posin"><i class="ar ar-x"></i></span>
        </div>
        <?php if($rand){ ?>
        <div class="<?php echo $alertOn; ?> text-center mx-3 w-85">
                         <?php echo $alert; ?> <?php echo $rand; ?>                          <?php echo $alert1; ?>
        </div>
        <?php } ?>
        <form action="proses/isiPesanan.php" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="Nama Pemesan">Nama Pemesan</label>
                <input type="text" name="namaPemesan" class="form-control w-100" placeholder="Nama Pemesan" />
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" name="email" class="form-control w-100" placeholder="example@gmail.com" />
            </div>
            <div class="form-group">
                <label for="No. Handphone">No. Handphone</label>
                <input type="text" name="nomp" class="form-control w-100" placeholder="No. Handphone" />
            </div>
            <div class="form-group">
                <label for="Nama Tamu">Nama Tamu</label>
                <input type="text" name="namaTamu" class="form-control w-100" placeholder="Nama Tamu" />
            </div>
            <div class="form-group">
                <?php 
                if($rand){
                ?>
                <input type="hidden" name="kodeBookingKamar" class="form-control w-100" value="<?php echo $rand; ?>"/>
                <label for="Nama Kamar">Kode Booking</label><br>
                <input type="text" name="" class="form-control w-100" value="<?php echo $rand; ?>" disabled/>
                <?php } ?>
                <div class="form-group mt-3">
                    <label for="Kode Kamar">Tipe Kamar</label>
                    <select type="text" name="kodeKamar" class="form-control">
                    <option value="Reguler">Reguler</option>
                    <option value="Medium">Medium</option>
                    <option value="Premium">Premium</option>
                </div>
            </div>
            <div class="form-group">
                <input type="hidden" name="checkOut" class="form-control w-100" value="<?php echo $checkOut;?>" />
            </div>
            <div class="form-group">
                <input type="hidden" name="jmlPesanan" class="form-control w-100" value="<?php echo $jmlPesan; ?>" />
            </div>
            <div class="form-group">
                <input type="hidden" name="checkIn" class="form-control w-100" value="<?php echo $checkIn;?>" />
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-primary w-100" type="submit" name="kirim">Konfirmasi Pemesanan</button>
            </div>
        </form>
    </div>
</section>
    <?php
    } ?>
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
    <script type="text/javascript" charset="utf-8">
        var namaTamu = document.getElementById("openForm");
        function openModal1() {
            namaTamu.style.display = "block";
        }
        function closeModal1() {
            namaTamu.style.display = "none";
        }
    </script>
</body>
</html>
<?php }else{
    header("Location: portofolio.php");
}
?>