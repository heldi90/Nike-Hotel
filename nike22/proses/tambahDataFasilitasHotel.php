<?php

include "../koneksi.php";



$namaHotel = $_POST['namaHotel'];
$kodeHotel = $_POST['kodeHotel'];
$gambar_produk = $_FILES['gambar_produk']['name'];
date_default_timezone_set("Asia/Jakarta");
$dates = date("H:i d m Y");

//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload
    $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO dataHotel VALUES ('', '$nama_gambar_baru', '$namaHotel', '$kodeHotel', '', '$dates')";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if (!$result) {
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil ditambah.');window.location='../admin/fasilitas-hotel.php';</script>";
        }

    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../admin/fasilitas-hotel.php';</script>";
    }
} else {
    $query = "INSERT INTO dataHotel VALUES ('', '$nama_gambar_baru', '$namaHotel', '$kodeHotel', '', '$dates')";
    $result = mysqli_query($conn, $query);
    // periska query apakah ada error
    if (!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil ditambah.');window.location='../admin/fasilitas-hotel.php';</script>";
    }
}