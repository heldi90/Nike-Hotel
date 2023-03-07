<?php
error_reporting(0);
session_start();
include "koneksi.php";

$kodeKamare = $_SESSION['kodeKamares'];
$fotoHotel =  $_SESSION['fotoHotel'];
if($_SESSION['kodeKamares']){

$query = "SELECT * FROM checkLog WHERE rand ='$kodeKamare'";

$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Hotel Kennie - Booking kamar mudah 100% terpercaya.</title>
    <link rel="stylesheet" href="styleser.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="cssico/ardesico.css" type="text/css" media="all" />
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
        .max-768 {
            max-width: 768px;
        }
        .w-65 {
            max-width: 65%;
        }
    </style>
</head>
<body class="max-768 mx-auto bg-light">
            <form class="form">
    <section class="p-3 bg-primary-2 text-center text-white">

            <div class="logos">
                <img width="130" class="cover" height="130" src="images/logos.png" alt="" />
                <div class="mt-2 w-65 mx-auto">
                    <h1 class="h3">Hotel Kennie</h1>
                    <p>
                        Pada Tanggal
                        <br>
                        <b><?php echo date("d M Y"); ?></b>
                    </p>
                    <p>
                        Surat faktur ini dibuat untuk klien yang ingin menetap sementara tanggal <b><?php echo $row['checkIn']; ?></b> s.d <b><?php echo $row['checkOut']; ?></b> 
                    </p>
                    <p>
                        <b>Tertanda</b>
                    </p>
                    <p>
                        Nama Pemesan : <b><?php echo $row['namaPemesan']; ?></b><br>
                        Nama Tamu : <b><?php echo $row['namaTamu']; ?></b>
                        <br>
                        Kode Booking : <b>#<?php echo $row['rand']; ?></b>
                        <br>
Tipe Kamar : <b>#<?php echo $row['kodeKamar']; ?></b><br>
Harga Kamar : <b><?php echo $row['hargaKamar']; ?></b>
                        <br><br>
                    </p>
                    <p>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 p-2">
                                <div class="card bg-none border-nonr">
                                    <img class="cover radius-1" src="proses/gambar/<?php echo $fotoHotel; ?>" alt="" width="220%" height="350" />
                                </div>
                            </div>
                        </div>
                    </p>
                    <p>
                        <b>Dengan Ini Pemesanan Kamar Hotel di Hotel Kennie <span class="text-success">Berhasil</span></b>
                    </p>
                    <div class="mt-4 mb-5">
                        <input id="createPDF" type="button" class="btn btn-info" value="Download Faktur"/>
                    </div>
                </div>
            </div>
    </section>
        </form>


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
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script src="jspdf.js"></script>
    <script>
        $(document).ready(function () {
            var form = $('.form'),
            cache_width = form.width(),
            a4 = [595.28, 841.89]; // for a4 size paper width and height

            $('#createPDF').on('click', function () {
                $('body').scrollTop(0);
                createPDF();
                setTimeout(loadHome,5000);
            });

            function createPDF() {
                getCanvas().then(function (canvas) {
                    var
                    img = canvas.toDataURL("image/png"),
                    doc = new jsPDF({
                        unit: 'px',
                        format: 'a4'
                    });
                    doc.addImage(img, 'JPEG', 20, 20);
                    doc.save('Neo-10'+ Math.random() + '.pdf');
                    form.width(cache_width);
                });
            }
            function loadHome(){
                document.location.href ="index.php";
            }
            function getCanvas() {
                form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
                return html2canvas(form, {
                    imageTimeout: 2000,
                    removeContainer: true
                });
            }
        });
    </script>
</body>
</html>

<?php

}else{
    if($_GET['idLog']){
$kodes = $_GET['idLog'];
$query = "SELECT * FROM checklog INNER JOIN datakamar ON checklog.kodeKamar = datakamar.kodeKamar;";

$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);
$kodekamars = $row['kodeKamar'];
$queryes = "SELECT * FROM dataKamar WHERE kodeKamar ='$kodekamars'";
$sqlo = mysqli_query($conn, $queryes);
$rows = mysqli_fetch_array($sqlo);


$nama = "SELECT * FROM checklog INNER JOIN datakamar ON checklog.kodeKamar = datakamar.kodeKamar WHERE checklog.idLog = '$kodes'";
$sqlCek = mysqli_query($conn, $nama);
$namaRow = mysqli_fetch_array($sqlCek);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Hotel Kennie - Booking kamar mudah 100% terpercaya.</title>
    <link rel="stylesheet" href="styleser.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="cssico/ardesico.css" type="text/css" media="all" />
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
        .max-768 {
            max-width: 768px;
        }
        .w-65 {
            max-width: 65%;
        }
    </style>
</head>
<body class="max-768 mx-auto bg-light">
        <form class="form">
    <section class="p-3 bg-primary-2 text-center text-white">

            <div class="logos">
                <img width="130" class="cover" height="130" src="images/logos.png" alt="" />
                <div class="mt-2 w-65 mx-auto">
                    <h1 class="h3">Hotel Kennie</h1>
                    <p>
                        Pada Tanggal
                        <br>
                        <b><?php echo date("d M Y"); ?></b>
                    </p>
                    <p>
                        Surat faktur ini dibuat untuk klien yang ingin menetap sementara tanggal <b><?php echo $row['checkIn']; ?></b> s.d <b><?php echo $row['checkOut']; ?></b> 
                    </p>
                    <p>
                        <b>Tertanda</b>
                    </p>
                    <p>
                        Nama Pemesan : <b><?php echo $namaRow['namaPemesan']; ?></b><br>
                        Nama Tamu : <b><?php echo $namaRow['namaTamu']; ?>
                        <br>
                        Kode Booking : <b>#<?php echo $namaRow['rand']; ?></b>
                        <br>
Tipe Kamar : <b>#<?php echo $namaRow['kodeKamar']; ?></b>
<br>
Harga Kamar : <b>Rp. <?php echo $namaRow['hargaKamar']; ?></b>
                        <br><br>
                    </p>
                    <p>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 p-2">
                                <div class="card bg-none border-nonr">
                                    <img class="cover radius-1" src="proses/gambar/<?php echo $rows['fotoKamar']; ?>" alt="" width="220%" height="350" />
                                </div>
                            </div>
                        </div>
                    </p>
                    <p>
                        <b>Dengan Ini Pemesanan Kamar Hotel di Hotel Kennie <span class="text-success">Berhasil</span></b>
                    </p>
                    <div class="mt-4 mb-5">
                        <input id="createPDF" type="button" class="btn btn-info" value="Download Faktur"/>
                    </div>
                </div>
            </div>

    </section>
            </form>

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
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script src="jspdf.js"></script>
    <script>
        $(document).ready(function () {
            var form = $('.form'),
            cache_width = form.width(),
            a4 = [595.28, 841.89]; // for a4 size paper width and height

            $('#createPDF').on('click', function () {
                $('body').scrollTop(0);
                createPDF();
            });

            function createPDF() {
                getCanvas().then(function (canvas) {
                    var
                    img = canvas.toDataURL("image/png"),
                    doc = new jsPDF({
                        unit: 'px',
                        format: 'a4'
                    });
                    doc.addImage(img, 'JPEG', 20, 20);
                    doc.save('Neo-10'+ Math.random() + '.pdf');
                    form.width(cache_width);
                });
            }
            function getCanvas() {
                form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
                return html2canvas(form, {
                    imageTimeout: 2000,
                    removeContainer: true
                });
            }
        });
    </script>
</body>
</html>
<?php }else{
    if(!$_SESSION['kodeKamares']){
    header("Location: index.php");
}
}
    

}
?>