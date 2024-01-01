<?php
    include("koneksi.php");
    session_start();

    $query = "SELECT * FROM tb_mahasiswa ORDER BY nim;";
    $sql = mysqli_query($conn, $query);
    $no = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font/css/font-awesome.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <title>CRUD PHP MySQL</title>
</head>
<body>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD - BS5</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-3">Data Mahasiswa</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data yang disimpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

        <?php
        if(isset($_SESSION["eksekusi"])): 
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>
                <?php 
                    echo $_SESSION["eksekusi"];
                ?>
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
            session_destroy();
        endif;
        ?>

        <div class="table-responsive">
            <table id="example" class="display table align-middle cell-border stripe hover">
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
    <div class="mb-5"></div>
</body>
</html>
