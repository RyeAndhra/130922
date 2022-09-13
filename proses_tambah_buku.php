<?php

if($_POST){

    $nama = $_POST['nama_buku'];
    $deskripsi = $_POST['deskripsi'];
    $foto = basename($_FILES["foto"]["name"]);
    $target_dir = "Assets/foto_produk/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    if(empty($nama)) {
        echo "<script>alert('Nama Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    
    } elseif(empty($deskripsi)) {
        echo "<script>alert('Deskripsi Produk tidak boleh kosong');location.href='tambah_buku.php';</script>";
    
    } elseif(empty($foto)) {
        echo "<script>alert('Foto Produk tidak boleh kosong');location.href='tambah_buku.php';</script>";
    
    } else {
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check == false) {
            echo "<script>alert('File yang dipilih bukan foto.');location.href='tambah_buku.php';</script>";
            $uploadOk = 0;
        
        } else {
            $uploadOk = 1;
        }
    
        if(file_exists($target_file)) {
            echo "<script>alert('File foto sudah ada.');location.href='tambah_buku.php';</script>";
            $uploadOk = 0;
        }
    
        if($_FILES["foto"]["size"] > 500000) {
            echo "<script>alert('File foto terlalu besar');location.href='tambah_buku.php';</script>";
            $uploadOk = 0;
        }
    
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='tambah_buku.php';</script>";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "<script>alert('File foto tidak terupload');location.href='tambah_buku.php';</script>";  
        
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                    
                include "koneksi.php";
                $sql = "INSERT INTO `buku` (`nama_buku`, `deskripsi`, `foto`) VALUES ('$nama', '$deskripsi', '$foto')";
                $insert=mysqli_query($conn, $sql);

                if($insert) {
                    echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
                
                } else {
                    echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
                }

                } else {
                    echo "<script>alert('Error saat upload file foto');location.href='tambah_buku.php';</script>";
            }
        }
    }
}

?>