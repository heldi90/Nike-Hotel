<?php

include "../koneksi.php";
$kodeKmr = $_POST['kodeKamar'];

$query = "SELECT * FROM checkLog WHERE kodeKamar = '$kodeKmr'";

// $kamar = "SELECT * FROM checklog INNER JOIN datakamar ON checklog.kodeKamar = datakamar.kodeKamar;"

$sql = mysqli_query($conn, $query);

$row = mysqli_fetch_array($sql);


// $hargaKamar = $mow['hargaKamar'];
date_default_timezone_set("Asia/Jakarta");

    $jmlKamarPesanan = $_POST['jmlPesanan'];
    $jmlPesanan = (int) $jmlKamarPesanan;
    $checkIn = $_POST['checkIn'];
    $namaPemesan = $_POST['namaPemesan'];
    $email = $_POST['email'];
    $nomp = $_POST['nomp'];
    $kodeBookingKamar = $_POST['kodeBookingKamar'];
    $kodeKamar = $_POST['kodeKamar'];
    $namaTamu = $_POST['namaTamu'];
    $checkOut = $_POST['checkOut'];
    $dates = date("H:i d M Y");
    $cekKodeBoking = "SELECT * FROM checkLog WHERE rand = '$kodeBookingKamar'";
    $sqlKode = mysqli_query($conn, $cekKodeBoking);
    $rowKode = mysqli_fetch_array($sqlKode);
    if ($rowKode) {
       
        echo "Tidak dapat menambahkan Kode Kamar karena sudah ada pada database";
        header("Location: ../index.php");
      } else {

        
          if($_POST['nomp'] > 0){
          $ins = "INSERT INTO checkLog VALUES ('','$kodeBookingKamar','$checkIn','$checkOut','$jmlKamarPesanan','$namaPemesan','$email','$kodeKamar','$nomp','$namaTamu')";
          $sq = mysqli_query($conn,$ins);
          
          session_start();
          $_SESSION['KodBook'] = $kodeBookingKamar;
          $_SESSION['KodKam'] = $kodeKamar;
          header("Location: ../client-post.php");
      
          } else {
          session_start();
          $_SESSION['alert'] = "Kode Kamar Tidak Tersedia! Untuk Kode ";
          $_SESSION['alert1'] = "Karena Kode Kamar Tidak tersedia!";
          $_SESSION['alert-on'] = "alert alert-danger";
      
          header("Location: ../index.php?pesan=pesan");
          }
      }
