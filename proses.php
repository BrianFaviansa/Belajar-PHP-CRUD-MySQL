<?php
    include("koneksi.php");

    if(isset($_POST['aksi'])) {
        if($_POST['aksi'] == "add") {

            
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $foto = $_FILES["foto"]["name"];
            $alamat = $_POST["alamat"];

            $dir = "img/";
            $tmpFile = $_FILES["foto"]["tmp_name"];
            move_uploaded_file($tmpFile, $dir.$foto); 


            $query = "INSERT INTO tb_mahasiswa VALUES (null, '$nim', '$nama', '$jenis_kelamin', '$foto', '$alamat')";
            $sql = mysqli_query($conn, $query);
            if($sql) {
                // echo "data berhasil ditambahkan <a href='index.php'>[Home]</a>";
                header("location: index.php");
            } else {
                echo $query;
            }

            // echo $nisn. " | ". $nama. " | ". $jenis_kelamin. " | ". $foto. " | ". $alamat;
            // echo "<br>";
            // echo "Tambah Data <a href='index.php'>[Home]</a>";
        } else if($_POST['aksi'] == "edit") {
            echo "Edit Data <a href='index.php'>[Home]</a>";
        }
    }
    
    if(isset($_GET["hapus"])) {
        $id_mahasiswa = $_GET["hapus"];

        $queryShow = "SELECT * FROM tb_mahasiswa WHERE id_siswa = '$id_mahasiswa';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("img/".$result["foto"]);

        $query = "DELETE FROM tb_mahasiswa WHERE id_siswa = '$id_mahasiswa';";
        $sql = mysqli_query($conn, $query);


        if($sql) {
            // echo "data berhasil dihapus <a href='index.php'>[Home]</a>";
            header("location: index.php");
        } else {
            echo $query;
        }
    }

?>