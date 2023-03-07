<?php
error_reporting(0);
session_start();
include "../koneksi.php";
if(!$_SESSION['email']){
    header("Location: ../login.php");
}
include "../koneksi.php";

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
    <div class="text-center">
        <div class="w-75 mx-auto p-4">
            <h1 class="h3">Halaman Resepsionis</h1>

        </div>
        <div class="text-md mb-5">
            <h2 class="h4">Cek Data Reservasi</h2>
        </div>
        <div class="mt-4 col-12 mx-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Handphone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    
                    $query = mysqli_query($conn,"SELECT * FROM checkLog");
                    while($row = mysqli_fetch_array($query)){

                    ?>

                    <tr>
                        <th scope="row"><?php echo $row['idLog']; ?></th>
                        <td>                    <?php echo $row['namaPemesan']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['nomorP']; ?></td>
                        
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>