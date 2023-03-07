<?php

session_start();
include "../../koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM dataKamar WHERE id='$id'";
$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Tambah Data Fasilitas Kamar</title>
        <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="all" />
    </head>
    <body>
        <div style="max-width:768px;margin:20px auto;">
            <div class="text">
                <h1 class="h2">Edit Fasilitas Kamar</h1>
            </div>
            <div class="mt-2">
                <form action="../../proses/editDataFasilitasKamar.php" method="POST" accept-charset="utf-8">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id']; ?>" />
                    <div class="mt-2">
                        <textarea style="height:300px;width:100%; padding:10px; border-radius:4px; border:3px solid darkgray;" name="areaFasilitas" type="text"><?php echo $row['fasilitas']; ?></textarea>
                        <small class="text-danger">Gunakan koma "," di akhir kata.</small>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Tambahkan Fasilitas</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>