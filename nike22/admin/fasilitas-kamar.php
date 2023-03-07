<?php

error_reporting(0);
session_start();
include "../koneksi.php";
/*if (!$_SESSION['email']) {
    header("Location: ../login.php");
}*/
include "../koneksi.php";
    $id = $_GET['id'];
    $fasilitas = "";
if ($_GET['del']) {
    $steh = "UPDATE dataKamar SET 
    fasilitas = '$fasilitas'
    WHERE id='$id'";
    $mlso = mysqli_query($conn, $steh);
    echo "<script>alert('Fasilitas Berhasil Dihapus!');
        document.location.href = 'fasilitas-kamar.php';
        </script>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Hotel Kennie - Booking kamar mudah 100% terpercaya.</title>
    <link rel="stylesheet" href="../styleser.css" type="text/css" media="all" />
    <link rel="stylesheet" href="reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../cssico/ardesico.css" type="text/css" media="all" />
</head>

<body class="max mx-auto">
    <section id="wrappes">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-3 p-2 bg-primary-2 text-white vh-100">
                    <div class="navSide border-bottom border-white">
                        <div class="logos p-2">
                            <h1 class="m-0 p-0 h3">Hotel Kennie</h1>
                        </div>
                    </div>
                    <div class="mt-2 p-2">
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="index.php">Kamar</a>
                        </div>
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="fasilitas-kamar.php">Fasilitas Kamar</a>
                        </div>
                        
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="fasilitas-hotel.php">Fasilitas Hotel</a>
                        </div>
                        <!---
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="history.php">Hapus History</a>
                        </div>--->
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="../logout.php">Keluar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 p-2">
                    
                    <div class="bg-primary-2 p-3"></div>
                    
                    <div class="p-3">
                        <div class="my-3">
                            Data Fasilitas Kamar
                        </div>

                    </div>
                    <table class="table mt-3 table-striped">
                        <thead>

                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Kode Kamar</th>
                                <th scope="col">Fasilitas Kamar</th>

                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM dataKamar ORDER BY id DESC");

                            while ($row = mysqli_fetch_array($sql)) {


                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $row['id']; ?>
                                    </th>
                                    <td><?php echo $row['kodeKamar']; ?></td>
                                    <td><?php echo $row['fasilitas']; ?></td>


                                    <td>
                                        <a class="btn btn-primary" href="proses/editDataFasilitasKamar.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="fasilitas-kamar.php?id=<?php echo $row['id']; ?>&del=delete">Hapus</a>
                                    </td>
                                </tr>
                                <?php

                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>