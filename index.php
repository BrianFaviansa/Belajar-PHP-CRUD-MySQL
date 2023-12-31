<?php
    include("koneksi.php");

    $query = "SELECT * FROM tb_mahasiswa;";
    $sql = mysqli_query($conn, $query);
    
    $no = 0;


    
?>

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
                <?php
                    while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                <tr>
                    <td><center>
                        <?php echo ++$no; ?>.
                    </center></td>
                    <td>
                        <?php echo $result["nim"]; ?>
                    </td>
                    <td>
                        <?php echo $result["nama"]; ?>
                    </td>
                    <td>
                    <?php echo $result["jenis_kelamin"]; ?>
                    </td>
                    <td>
                        <img src="img/<?php echo $result["foto"]; ?>" style="width: 150px;">
                    </td>
                    <td>
                    <?php echo $result["alamat"]; ?>
                    </td>
                    <td>
                        <a href="kelola.php?ubah=<?php echo $result["id_mahasiswa"]; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="proses.php?hapus=<?php echo $result["id_mahasiswa"]; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
    </div>
    </div>


</body>
</html>