<?php 

    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['keranjang'];
    if(count($cart)> 0 ) {
        $lama_pinjam = 5;
        $tgl_kembali = date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));
        mysqli_query($conn, "insert into peminjaman_buku (id_siswa, tanggal_pinjam, tanggal_kembali) value('".$_SESSION['id_siswa']."','".date('Y-m-d')."','".$tgl_kembali."')");
        $id = mysqli_insert_id($conn);

        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_peminjaman_buku (id_peminjaman_buku, id_buku, qty) value('".$id."','".$val_produk['id_buku']."','".$val_produk['qty']."')");

        }

        unset($_SESSION['keranjang']);
        echo '<script>alert("Anda berhasil meminjam buku");location.href="histori_peminjaman.php"</script>';
    
    }

?>