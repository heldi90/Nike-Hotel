<?php


include "../koneksi.php";



$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$kodeKamar = $_POST['kodeKamar'];
$nameKamar = $_POST['namaKamar'];
$jml = $_POST['jml'];
session_start();
$_SESSION['uuid'] = $kodeKamar;
$_SESSION['checkIn'] = $checkIn;
$_SESSION['checkOut'] = $checkOut;
$_SESSION['nameKamar'] = $nameKamar;
$_SESSION['jmlKamar'] = $jml;
header("Location: ../index.php");