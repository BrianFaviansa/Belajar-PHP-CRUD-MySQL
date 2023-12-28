<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="font/css/font-awesome.min.css">

    <title>CRUD PHP MySQL</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD - BS5</a>
        </div>
    </nav>

    <div class="container">

        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" placeholder="Ex: 222410101001">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Ex: Ucup Surucup">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select id="jkel" class="form-select"">
                    <option selected>Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="foto">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" rows="3"></textarea>
            </div>

        <div class="mb-3 row mt-4">
            <div class="col">
                <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Simpan</button>
                <a href="index.php" type="button" class="btn btn-secondary"><i class="fa fa-reply" aria-hidden="true"></i>  Batal</a>
            </div>
        </div>


        </div>
    </div>

    </body>
</html>