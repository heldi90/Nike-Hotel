<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Tambah Data Fasilitas Kamar</title>
        <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="all" />
    </head>
    <body>
        <div style="max-width:768px;margin:20px auto;">
            <div class="text">
                <h1 class="h2">Tambah Fasilitas Kamar</h1>
            </div>
            <div class="mt-2">
                <form action="../../proses/tambahDataFasilitasKamar.php" method="POST" accept-charset="utf-8">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id']; ?>" />
                    <div class="row">
                        <div class="col-6">
                            <label for="Wifi">Wifi</label><br>
                            <select class="form-control w-100" name="fasilitas" id="fasilitas">
                                <option value="">-----</option>
                                <option value="WiFi">WiFi</option>
                            </select class="form-control w-100">
                        </div>
                        <div class="col-6">
                            <label for="Kamar Mandi">Kamar Mandi</label><br>
                            <select class="form-control w-100" name="fasilitas1" id="fasilitas">
                                <option value="">-----</option>
                                <option value="Kamar Mandi">Kamar Mandi</option>
                            </select class="form-control w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="Sarapan Pagi">Sarapan Pagi</label><br>
                            <select class="form-control w-100" name="fasilitas2" id="fasilitas">
                                <option value="">-----</option>
                                <option value="Sarapan Pagi">Sarapan Pagi</option>
                            </select class="form-control w-100">
                        </div>
                        <div class="col-6">
                            <label for="Makan Malam">Makan Malam</label><br>
                            <select class="form-control w-100" name="fasilitas3" id="fasilitas">
                                <option value="">-----</option>
                                <option value="Makan Malam">Makan Malam</option>
                            </select class="form-control w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="Disert">Disert</label><br>
                            <select class="form-control w-100" name="fasilitas4" id="fasilitas">
                                <option value="">-----</option>
                                <option value="Disert">Disert</option>
                            </select class="form-control w-100">
                        </div>
                        <div class="col-6">
                            <label for="2 Botol Air Mineral">2 Botol Air Mineral</label><br>
                            <select class="form-control w-100" name="fasilitas5" id="fasilitas">
                                <option value="">-----</option>
                                <option value="2 Botol Air Mineral">2 Botol Air Mineral</option>
                            </select class="form-control w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="Fasilitas Kolam Renang">Fasilitas Kolam Renang</label><br>
                            <select class="form-control w-100" name="fasilitas6" id="fasilitas">
                                <option value="">-----</option>
                                <option value="Fasilitas Kolam Renang">Fasilitas Kolam Renang</option>
                            </select class="form-control w-100">
                        </div>
                        <div class="col-6">
                            <label for="2 Trapi & Sauna">2 Trapi & Sauna</label><br>
                            <select class="form-control w-100" name="fasilitas7" id="fasilitas">
                                <option value="">-----</option>
                                <option value="2 Trapi & Sauna">2 Trapi & Sauna</option>
                            </select class="form-control w-100">
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Tambahkan Fasilitas</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>