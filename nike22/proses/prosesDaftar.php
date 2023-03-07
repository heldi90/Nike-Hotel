<?php


require "../koneksi.php";


$nama = $_POST['nama'];
$email = $_POST['email'];
$passw = md5($_POST['passw']);
$role = "users";

$query = mysqli_query($conn,"INSERT INTO users VALUES ('','$nama','$email','$passw','$role')");
mysqli_query($conn,$query);

header("Location: ../login.php");