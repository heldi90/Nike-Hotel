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
        <title>Edit Foto - Hotel Hebat</title>
        <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="all" />
    </head>
    <body class="p-3">
        <div style="max-width:375px;margin:20px auto;padding:15px;">
            <form action="../../proses/gantiDataKamar.php" method="POST" accept-charset="utf-8">
                <input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>"/><br>
                <input type="text" name="namaKamar" class="form-control" value="<?php echo $row['namaKamar']; ?>"/><br>
                <div class="form-group">
                    <label for="Nama Kamar">Tipe Kamar</label>
                <input type="hidden" name="kodeKamar" class="form-control" value="<?php echo $row['kodeKamar']; ?>" />
                <input type="text" name="" class="form-control" value="<?php echo $row['kodeKamar']; ?>" disabled/>
                </div>
                <input type="text" name="hargaKamar" class="form-control" value="<?php echo $row['hargaKamar']; ?>"/><br>
                <input type="text" name="jmlKamar" class="form-control" value="<?php echo $row['jmlKamar']; ?>"/><br>
                <button type="submit" class="btn btn-primary">Ganti Data</button>
            </form>
        </div>
    </body>
</html>