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
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD - BS5</a>
        </div>
    </nav>

    <!-- judul -->
    <div class="container">
        <h1 class="mt-3">Data Mahasiswa</h1>
    <figure>
        <blockquote class="blockquote">
            <p>Berisi data yg disimpan di database</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            CRUD <cite title="Source Title">Create Read Update Delete</cite>
        </figcaption>
    </figure>
    <a href="kelola.php" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
    <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th><center>No.</center></th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto Mahasiswa</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><center>1.</center></td>
                    <td>222410101001</td>
                    <td>Alexander Kurniawan</td>
                    <td>Laki-laki</td>
                    <td>
                        <img src="img/img1.jpg" style="width: 150px;">
                    </td>
                    <td>Jl. Amim Bonjol</td>
                    <td>
                        <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><center>2.</center></td>
                    <td>222410101002</td>
                    <td>Susi Susinti</td>
                    <td>Perempuan</td>
                    <td>
                        <img src="img/img2.jpg" style="width: 150px;">
                    </td>
                    <td>Jl. Makmum Bonjol</td>
                    <td>
                        <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="proses.php?hapus=2" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            </table>
    </div>
    </div>


</body>
</html>