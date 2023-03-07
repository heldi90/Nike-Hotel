<?php

include "../koneksi.php";


$fasilitas = $_POST['fasilitas'];
$fasilitas1 = $_POST['fasilitas1'];
$fasilitas2 = $_POST['fasilitas2'];
$fasilitas3 = $_POST['fasilitas3'];
$fasilitas4 = $_POST['fasilitas4'];
$fasilitas5 = $_POST['fasilitas5'];
$fasilitas6 = $_POST['fasilitas6'];
$fasilitas7 = $_POST['fasilitas7'];
$id = $_POST['id'];
$koma = ",";
$data = $fasilitas."".$koma."".$fasilitas2."".$koma."".$fasilitas3."".$koma."".$fasilitas4."".$koma."".$fasilitas5."".$koma."".$fasilitas6."".$koma."".$fasilitas7;

$query = "UPDATE dataKamar SET 
fasilitas = '$data' WHERE id = '$id'";
mysqli_query($conn,$query);
header("Location: ../admin/fasilitas-kamar.php");