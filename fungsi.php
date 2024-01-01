<?php
    include("koneksi.php");

    function tambahData($data, $files) {
        $nim = $data["nim"];
        $nama = $data["nama"];
        $jenis_kelamin = $data["jenis_kelamin"];

        $split = explode('.', $files["foto"]["name"]);
        $ekstensi = $split[count($split)]-1;
        $foto = $nim.".".$ekstensi;

        $alamat = $data["alamat"];

        $dir = "img/";
        $tmpFile = $files["foto"]["tmp_name"];
        move_uploaded_file($tmpFile, $dir.$foto); 


        $query = "INSERT INTO tb_mahasiswa VALUES (null, '$nim', '$nama', '$jenis_kelamin', '$foto', '$alamat')";
        $sql = mysqli_query($GLOBALS["conn"], $query);

        return true;
    }

    function ubahData($data, $files) {
        $id_mahasiswa = $data["id_mahasiswa"];
        $nim = $data["nim"];
        $nama = $data["nama"];
        $jenis_kelamin = $data["jenis_kelamin"];
        $alamat = $data["alamat"];

        $queryShow = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sqlShow = mysqli_query($GLOBALS["conn"], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if($files["foto"]["name"] == "") {
            $foto = $result["foto"];
        } else {
            $split = explode('.', $files["foto"]["name"]);
            $ekstensi = $split[count($split)]-1;
            $foto = $result["nim"].".".$ekstensi;
            unlink("img/".$result["foto"]);
            move_uploaded_file($files["foto"]["tmp_name"], "img/".$foto);
        }

        $query = "UPDATE tb_mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', foto='$foto' WHERE id_mahasiswa='$id_mahasiswa';";
        $sql = mysqli_query($GLOBALS["conn"], $query);

        return true;
    }

    function hapusData($data){
        $id_mahasiswa = $data["hapus"];
        $queryShow = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sqlShow = mysqli_query($GLOBALS["conn"], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("img/".$result["foto"]);

        $query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($GLOBALS["conn"], $query);
        return true;
    }
?>
