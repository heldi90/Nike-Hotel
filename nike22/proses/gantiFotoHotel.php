<?php

include "../koneksi.php";



$id_user=$_POST['id'];
$x = $_POST['x'];

if(isset($_POST['update'])){ 
    // Jika user menceklis checkbox yang ada di form ubah, lakukan :

    // Ambil data foto yang dipilih dari form

    $sumber = $_FILES['gambar']['name'];

    $nama_gambar = $_FILES['gambar']['tmp_name'];

    

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload

    $fotobaru = date('dmYHis').$sumber;

    

    // Set path folder tempat menyimpan fotonya

    $path = "gambar/".$fotobaru;



    if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak

        // Query untuk menampilkan data user berdasarkan id_user yang dikirim

        $query = "SELECT * FROM dataHotel WHERE id='".$id_user."'";

        $sql = mysqli_query($conn,$query); // Eksekusi/Jalankan query dari variabel $query

        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql



        // Cek apakah file gambar sebelumnya ada di folder foto

        if(is_file("gambar/".$data['fotoHotel'])) // Jika gambar ada

            unlink("gambar/".$data['fotoHotel']); // Hapus file gambar sebelumnya yang ada di folder images

        

        // Proses ubah data ke Database

        $query = "update dataHotel set fotoHotel='$fotobaru' where id='$id_user' ";

        $sql = mysqli_query($conn,$query); // Eksekusi/ Jalankan query dari variabel $query



        if($sql){ // Cek jika proses simpan ke database sukses atau tidak

            // Jika Sukses, Lakukan :

            header("location: ../admin/fasilitas-hotel.php"); // Redirect ke halaman index.php

        }else{

            // Jika Gagal, Lakukan :

            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

            echo "<br><a href='../admin/proses/editFotoHotel.php'>Kembali Ke Form</a>";

        }

    }else{

        // Jika gambar gagal diupload, Lakukan :

        echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 

                location = '../admin/proses/editFotoHotel.php'; 

                </script>";

    }

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :

    // Proses ubah data ke Database

    $query = "update dataHotel set fotoHotel='$x' where id='$id_user' ";

    $sql = mysqli_query($conn,$query); // Eksekusi/ Jalankan query dari variabel $query



    if($sql){ // Cek jika proses simpan ke database sukses atau tidak

        // Jika Sukses, Lakukan :

        header("location: ../admin/fasilitas-hotel.php"); // Redirect ke halaman index.php

    }else{

        // Jika Gagal, Lakukan :

        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

        echo "<br><a href='../admin/proses/editFotoHotel.php'>Kembali Ke Form</a>";

    }

}


