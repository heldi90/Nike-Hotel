<?php
include "../koneksi.php";
$checkin = $_POST['checkIn'];
$checkout = $_POST['checkOut'];
$jmlhKamar = $_POST['jmlhkamar'];
$rand = rand(1,9999)."-BOOKING";


if($checkin > 0 || $checkout > 0 || $jmlhKamar > 0){
session_start();
$_SESSION['alert'] = "Kode Booking Berhasil di Buat - ";
$_SESSION['alert-on'] = "alert alert-success";
$_SESSION['uuid'] = $rand;
$_SESSION['checkLog1'] = $checkin;
$_SESSION['checkLog2'] = $checkout;
$_SESSION['jml'] = $jmlhKamar;
$_SESSION['jmlTersedia'] = $jumlahKamarTersedia;
header("Location: ../index.php?pesan=pesan");


} else{
    session_start();
    $_SESSION['alerts'] = "Isi Folmulir dibawah terlebih dulu!";
    $_SESSION['alerts-on'] = "alert alert-warning text-center w-100";
    header("Location: ../index.php?pesan=pesan");
}
?>