<?php
error_reporting(0);
session_start();
include "../koneksi.php";
if(!$_SESSION['email']){
    header("Location: ../login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Resepsionis Dashboard! - </title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../cssico/ardesico.css" type="text/css" media="all" />
    <style type="text/css" media="all">
        .max {
            max-width: 1200px;
        }
    </style>
</head>
<body class="max mx-auto">
    <div class="navbar navbar-light bg-primary">
        <a class="navbar-brand text-white" href="../index.php"><h2 class="h4">Royal Hotel</h2></a>
        <div class="nav">
            <a class="mr-2 text-white mb-2" href="index.php">Cek Data Reservasi</a>
            <a class="mr-2 text-white mb-2" href="tanggal-reservasi.php">

                    Cek Tanggal Reservasi

                </a>
            <a class="mr-2 text-white mb-2" href="catat-reservasi.php">

                    Catat Data Reservasi

                    </a>
            <a class="mr-2 text-white mb-2" href="data-tamu.php">

                    Data Tamu

                    </a>
        </div>
        <div class="nav">
                        <a class="mr-2 text-white mb-2" href="history.php">
                    Hapus history

                    </a>
            <a class="mr-2 text-white mb-2" href="logout.php">

                    Keluar
            </a>
        </div>
    </div>
    <div class="text-center mt-5">
        <div class="w-75 mx-auto p-4">
            <h1 class="h3">Halaman Resepsionis</h1>
            <b>Cek Data Reservasi</b>
        </div>

        <div class="text-md mb-5">
            <h2 class="h4">Catat Data Reservasi</h2>
            
            <a href="catatan-input-reservasi.php">Lhat Catatan Reservasi</a>
        </div>
        <div class="mt-4 col-4 mx-auto">
            <form class="" action="../proses/inputData.php" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label for="Nama Pemesan">Nama Pemesan</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Pemesan" />
                </div>
                <div class="form-group">
                    <label for="Jumlah Kamar">Jumlah Kamar</label>
                    <input type="text" name="jml" class="form-control" placeholder="Jumlah Kamar" />
                </div>
                <div class="form-group">
                    <label for="Kode Booking">Kode Booking</label>
                    <input type="text" name="kode" class="form-control" value="<?php echo rand(1,99999)."-BOOKING"; ?>" />
                </div>
                <div class="form-group">
                    <label for="Check In">Check In</label>
                    <input type="date" name="cekIn" class="form-control" placeholder="Check In" />
                </div>
                <div class="form-group">
                    <label for="Check InOut">Check Out</label>
                    <input type="date" name="cekOut" class="form-control" placeholder="Check Out" />
                </div>
                <div class="form-group">
                    <label for="Check InOut">Harga Kamar</label>
                    <input type="text" name="hargaKamar" class="form-control" placeholder="300000" />
                </div>
                <div class="mt-3">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>