<?php


$fotoHotel = $_POST['fotoHotel'];
$kodeKamare = $_POST['kodeKamares'];

session_start();
$_SESSION['kodeKamares'] = $kodeKamare;
$_SESSION['fotoHotel'] = $fotoHotel;

header("Location: ../faktur.php");
