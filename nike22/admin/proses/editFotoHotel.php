<?php
session_start();
include "../../koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM dataHotel WHERE id='$id'";
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
    <div style="max-width:375px;margin:20px auto;">
        <img style="object-fit:cover;" src="../../proses/gambar/<? echo $row['fotoHotel']; ?>" width="100%" height="230">
    </div>
    <div style="margin-top:25px;padding:15px;">
        <form action="../../proses/gantiFotoHotel.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />
            <input name="x" type="hidden" id="x" value="<? echo $row['fotoHotel']; ?>" /></td>
        <input type="file" name="gambar" class="form-control" /><br>

        <button type="submit" class="btn btn-primary" name="update">Ganti Foto</button>
    </form>
</div>
</body>
</html>