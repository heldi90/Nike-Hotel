<?php


include "../koneksi.php";

$namaPemesans = $_POST['nama'];
$jml = $_POST['jml'];
$kode = $_POST['kode'];
$cekIn = $_POST['cekIn'];
$cekOut = $_POST['cekOut'];
$hargaKamar = $_POST['hargaKamar'];
$dates = date("H:i d M Y");


$ins = "INSERT INTO LogInput VALUES ('','$namaPemesans','$jml','$kode','$cekIn','$cekOut','$hargaKamar','$dates')";
mysqli_query($conn,$ins);
header("Location: ../resepsionis/catatan-input-reservasi.php");