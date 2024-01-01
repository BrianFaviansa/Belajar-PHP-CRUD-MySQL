<!DOCTYPE html>

<?php
    include("koneksi.php");

    $id_mahasiswa = "";
    $nim = "";
    $nama = "";
    $jenis_kelamin = "";
    $alamat = "";

    if(isset($_GET['ubah'])) {
        $id_mahasiswa = $_GET["ubah"];

        $query = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nim = $result["nim"];
        $nama = $result["nama"];
        $jenis_kelamin = $result["jenis_kelamin"];
        $alamat = $result["alamat"];


    }
?>

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
        <form method="post" action="proses.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id_mahasiswa; ?>" name="id_mahasiswa">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input required type="text" name="nim" class="form-control" id="nim" placeholder="Ex: 222410101001" value="<?php echo $nim; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input required type="text" name="nama" class="form-control" id="nama" placeholder="Ex: Ucup Surucup" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select required id="jkel" name="jenis_kelamin" class="form-select"">
                        <option <?php if($jenis_kelamin == "Laki-laki"){echo "selected";} ?> value="Laki-laki">Laki-laki</option>
                        <option <?php if($jenis_kelamin == "Perempuan"){echo "selected";} ?> value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
                <div class="col-sm-10">
                    <input <?php if(!isset($_GET["ubah"])){echo "required";} ?> class="form-control" type="file" name="foto" id="foto" accept="image/*">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea required class="form-control" id="alamat" name="alamat" rows="3"><?php echo $alamat;?></textarea>
                </div>

            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])) {
                    ?>
                            <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Simpan Perubahan</button>
                    <?php
                        } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Tambahkan</button>
                    <?php    
                    }
                    ?>
                    <a href="index.php" type="button" class="btn btn-secondary"><i class="fa fa-reply" aria-hidden="true"></i>  Batal</a>
                </div>
            </div>
            </div>
        </form>
    </div>

    </body>
</html>