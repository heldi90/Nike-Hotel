<?php

include "../koneksi.php";



$fasilitas = $_POST['areaFasilitas'];
$id = $_POST['id'];
$koma = ",";
$data = $fasilitas;

$query = "UPDATE dataKamar SET 
fasilitas = '$data' WHERE id = '$id'";
mysqli_query($conn,$query);
header("Location: ../admin/fasilitas-kamar.php");