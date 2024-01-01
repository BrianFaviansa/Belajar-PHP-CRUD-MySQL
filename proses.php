<?php
    include("fungsi.php");
    session_start();

    if(isset($_POST['aksi'])) {
        if($_POST['aksi'] == "add") {
            $berhasil = tambahData($_POST, $_FILES);
            if($berhasil) {
                $_SESSION["eksekusi"] = "Data berhasil ditambahkan";
                header("location: index.php");
            } else {
                echo $query;
            }
        } else if($_POST['aksi'] == "edit") {      
            $berhasil = ubahData($_POST, $_FILES);      
            if($berhasil) {
                $_SESSION["eksekusi"] = "Data berhasil diperbarui";
                header("location: index.php");
            } else {
                echo $query;
            }
        }
    }
    
    if(isset($_GET["hapus"])) {
        $berhasil = hapusData($_GET);
        if($berhasil) {
            $_SESSION["eksekusi"] = "Data berhasil dihapus";
            header("location: index.php");
        } else {
            echo $query;
        }
    }

?>