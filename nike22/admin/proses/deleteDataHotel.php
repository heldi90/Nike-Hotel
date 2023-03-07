<?php
include "../../koneksi.php";
$id = $_GET['id'];
$steh = "DELETE FROM dataHotel WHERE id='$id'";
$mlso = mysqli_query($conn, $steh);
echo "<script>alert('Barang Berhasil diHapus dari Data Kamar!');
        document.location.href = '../fasilitas-hotel.php';
        </script>";
?>