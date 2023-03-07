<?php


include "../koneksi.php";



$id = $_POST['id'];
$namaKamar = $_POST['namaKamar'];
$kodeKamar = $_POST['kodeKamar'];
$hargaKamar = $_POST['hargaKamar'];
$jmlKamar = $_POST['jmlKamar'];


$query = "UPDATE dataKamar SET 
namaKamar = '$namaKamar',
kodeKamar = '$kodeKamar',
hargaKamar = '$hargaKamar',
jmlKamar = '$jmlKamar' WHERE id = '$id'";
mysqli_query($conn,$query);
header("Location: ../admin/index.php");