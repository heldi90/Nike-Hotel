<?php

include "../koneksi.php";
session_start();
 
$email = $_POST['email'];
$password = md5($_POST['passw']);
 
 

$login = mysqli_query($conn,"select * from users where email='$email' and passw='$password'");

$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 

	if($data['role']=="admin"){
	    session_start();
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "admin";

		header("location:../admin/index.php");
 

	}else if($data['role']=="resepsionis"){
	    session_start();
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "resepsionis";

		header("location:../resepsionis/tanggal-reservasi.php");
 

	}else{
 
		header("location:../login.php");
	}	
}else{
	header("location:../login.php");
}
 
?>