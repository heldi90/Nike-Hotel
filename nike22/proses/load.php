<?php
include "../koneksi.php";
$querys = mysqli_query($conn, "SELECT * FROM dataKamar");

while($rows = mysqli_fetch_array($querys)){


?>


<?php } ?>