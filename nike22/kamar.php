<?php

include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Hotel Kennie- Booking kamar mudah 100% terpercaya.</title>
    <link rel="stylesheet" href="styleser.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="cssicow/ardesico.css" type="text/css" media="all" />
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
    <section id="wrappes-wp">
        <div class="container-fluid">
            <div class="col-12">
                <div class="py-3 mb-2">
                    <h2 class="h3">Kamar</h2>
                </div>
                <div class="row">
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM dataKamar ORDER BY id DESC");


                    while ($row = mysqli_fetch_array($query)) {
                                    $req = $row['kodeKamar'];
                    $query3 = "SELECT * FROM checkLog WHERE kodeKamar='$req'";
                    $sl = mysqli_query($conn,$query3);
$rows = mysqli_fetch_array($sl);
                        ?>
                        <div class="col-md-6 col-lg-6 p-2">
                            <div class="p-4 bg-gray-1 border-none">
                                <div class="card-top-img">
                                    <img width="100%" height="230" class="cover" src="proses/gambar/<?php echo $row['fotoKamar']; ?>" alt="" srcset="">
                                </div>

                                <div class="card-text mt-3 text-dark p-2">
                                    <h3><?php echo $row['namaKamar']; ?></h3>
                                    <b>Tipe Kamar : <a href="details-kamar.php"><?php echo $row['kodeKamar']; ?></a></b>
                                    <?php

                                    
                                    ?>
                                    <div class="mt-3">
                                        Jumlah Kamar Tersedia : <b class="text-success">
                                            <?php 
                                            
                                            
                                            
$jmlhStokKam = $row['jmlKamar']; 
                                            $jmlPesanKam = $rows['jmhkam']; 
                                            $dataJml = $jmlhStokKam - $jmlPesanKam;
                                            if($dataJml < "0"){
                                                $res = "Kamar Penuh";
                           $text = "";                 } else{
                                                $res = $dataJml;
                                                $text = "Kamar";
                                                
                                            }
                            echo $res." ";
                            echo $text;
                                            
                                            
                                            
                                            
                                            ?> 
                                            
                                            
                                            
                                        
                                        </b>
                                    </div>
                                   
                                   <?php ?>
                                   
                                    <br><b>Fasilitas: </b>
                                    <?php echo $row['fasilitas']; ?><div class="mt-3">
                                        Rp. <b class="text-danger">
                                            <?php echo $row['hargaKamar']; ?>
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
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