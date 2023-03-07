<?php
error_reporting(0);
session_start();
include "../koneksi.php";
if(!$_SESSION['email']){
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Hotel Kennie - Booking kamar mudah 100% terpercaya.</title>
    <link rel="stylesheet" href="../styleser.css" type="text/css" media="all" />
    <link rel="stylesheet" href="reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../cssico/ardesico.css" type="text/css" media="all" />
</head>

<body class="max mx-auto">
    <section id="wrappes">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-3 p-2 bg-primary-2 text-white vh-100">
                    <div class="navSide border-bottom border-white">
                        <div class="logos p-2">
                            <h1 class="m-0 p-0 h3">Hotel Kennie</h1>
                        </div>
                    </div>
                    <div class="mt-2 p-2">
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="index.php">Kamar</a>
                        </div>
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="fasilitas-kamar.php">Fasilitas Kamar</a>
                        </div>
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="fasilitas-hotel.php">Fasilitas Hotel</a>
                        </div>
                        <!---
                        
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="history.php">Hapus History</a>
                        </div>--->
                        <div class="p-2 mb-2 bg-white radius-1">
                            <a class="text-dark" href="../logout.php">Keluar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 p-2">
                    
                    <div class="bg-primary-2 p-3"></div>
                    
                    <div class="p-3">
                        <div class="my-3">
                            Data Kamar
                        </div>
                        <div class="m-0">
                            <button onclick="openModal3()" class="btn btn-primary bg-primary-2">Tambah Data Kamar</button>
                        </div>
                        <table class="table mt-3 table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Foto Kamar</th>
                                    <th scope="col">Nama Kamar</th>
                                    <th scope="col">Tipe Kamar</th>
                                    <th scope="col">Harga Kamar</th>
                                    <th scope="col">Jumlah Kamar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                $query = mysqli_query($conn,"SELECT * FROM dataKamar ORDER By id ASC");
                                while($row = mysqli_fetch_array($query)){
                                
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><img src="../proses/gambar/<?php echo $row['fotoKamar']; ?>" alt="<?php echo $row['fotoKamar']; ?>" class="w-100" height="170"/></td>
                                    <td><?php echo $row['namaKamar']; ?></td>
                                    <td><?php echo $row['kodeKamar']; ?></td>
                                    <td><?php echo $row['hargaKamar']; ?></td>
                                    <td><?php echo $row['jmlKamar']; ?></td>
                                    <td>
                                        <a class="btn btn-success" href="proses/editFoto.php?id=<?php echo $row['id']; ?>">Edit Foto</a>
                                        <a class="btn btn-primary bg-primary-2" href="proses/editDataKamar.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="proses/deleteDataKamar.php?id=<?php echo $row['id']; ?>">Hapus</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fromDataKamar">
        <div class="col-8 mx-auto p-4">
            <div class="text position-relative">
                <h2>Tambah Data Kamar <span class="posion" onclick="closeModal3()"><i class="ar ar-x"></i></span></h2>
            </div>
            <form class="mt-4"action="../proses/tambahDataKamar.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Nama Kamar">Nama Kamar</label>
                    <input type="text" name="namaKamar" class="form-control w-100" placeholder="Nama Kamar" />
                </div>
                <div class="form-group">
                    <label for="Nama Kamar">Tipe Kamar</label>
                    <select type="text" name="kodeKamar" class="form-control w-100">
                    <option value="Reguler">Reguler</option>
                    <option value="Medium">Medium</option>
                    <option value="Premium">Premium</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Nama Kamar">Harga Kamar</label>
                    <input type="text" name="hargaKamar" class="form-control w-100" placeholder="300000" />
                </div>
                <div class="form-group">
                    <label for="Nama Kamar">Jumlah Kamar</label>
                    <input type="number" name="jmlKamar" class="form-control w-100" placeholder="1" />
                </div>
                <div class="form-group">
                    <label for="Nama Kamar">Foto Kamar</label>
                    <input type="file" name="gambar_produk" class="form-control w-100" />
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="text/javascript">
    var formTambah = document.getElementById("fromDataKamar");
    function openModal3() {
        formTambah.style.display = "block";
    }
    function closeModal3() {
        formTambah.style.display = "none";
    }
</script>
</body>

</html>
