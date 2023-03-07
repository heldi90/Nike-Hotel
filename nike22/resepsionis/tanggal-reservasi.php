<?php
error_reporting(0);
session_start();
include "../koneksi.php";
if (!$_SESSION['email']) {
    header("Location: ../login.php");
}
include "../koneksi.php";
$cari = $_GET['cari'];
if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    echo "<script>document.location.href ='tanggal-reservasi.php?cari=".$keyword."';
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Resepsionis Dashboard! - </title>
    <link rel="stylesheet" href="../styleser.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../cssico/ardesico.css" type="text/css" media="all" />
    <style type="text/css" media="all">
        .max {
            max-width: 1200px;
        }
    </style>
</head>
<body class="max mx-auto">
    <div class="navbar navbar-light bg-primary-2">
        <a class="navbar-brand text-white" href="../index.php"><h2 class="h4">Hotel Kennie</h2></a>
        <div class="nav d-none">
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
            <a class="mr-2 text-white mb-2" href="logout.php">
                Keluar
            </a>
        </div>
    </div>
    <div class="text-center mt-3">
        <div class="w-75 mx-auto p-4">
            <h1 class="h3">Halaman Resepsionis</h1>

        </div>
        <div class="mt-4 col-12 mx-auto">

            <form class="my-3 d-flex" method="POST" action="">
                <input class="form-control w-50" name="keyword" type="text" placeholder="Cari Nama, Tanggal, Kode Booking" />
                <button type="submit" class="btn" name="cari">Cari</button>
                
            </form>
            

            <?php
            if ($_GET['cari']) {
                ?>
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Kode Booking</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Faktur</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $data = mysqli_query($conn, "select * from checkLog where rand like '%".$cari."%' OR
                    namaTamu like '%".$cari."%' OR
                    checkIn like '%".$cari."%' OR
                    checkOut like '%".$cari."%'");

                        while ($d = mysqli_fetch_array($data)){
                            ?>

                            <tr>
                                <th scope="row"><?php echo $d['idLog']; ?></th>
                                <th scope="row"><?php echo $d['namaTamu']; ?></th>
                                <td><?php echo $d['rand']; ?></td>
                                <td><?php echo $d['checkIn']; ?></td>
                                <td><?php echo $d['checkOut']; ?></td>
                                <th scope="row">
                                    <?php echo $d['kodeKamar']; ?>
                                    </th>
                        <td><a class="btn btn-danger" href="../faktur.php?idLog=<?php echo $d['idLog']; ?>">Faktur</a></td> 
                        
                            </tr>
                            <?php
                        } ?>
                        
                    </tbody>
                </table>
                <?php
            } else {
                ?>
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Kode Booking</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Faktur</th>
                    
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM checkLog");
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $row['idLog']; ?></th>
                                <th scope="row"><?php echo $row['namaTamu']; ?></th>
                                <td><?php echo $row['rand']; ?></td>
                                <td><?php echo $row['checkIn']; ?></td>
                                <td><?php echo $row['checkOut']; ?></td>
                                <td><?php echo $row['kodeKamar']; ?></td>
                                <td><a class="btn btn-danger" href="../faktur.php?idLog=<?php echo $row['idLog']; ?>">Faktur</a></td> 
                            </tr>
                            <?php
                        } ?>
                    </tbody>
                </table>
                <?php
            } ?>
        </div>
    </div>
</body>
</html>