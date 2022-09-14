<?php 

    include "header.php";
    include "koneksi.php";
    $qry_detail_buku  =mysqli_query($conn, "select * from buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku = mysqli_fetch_array($qry_detail_buku);

?>

<!-- Masthead-->
<header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Proses Peminjaman Buku</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-primary btn-xl" href="#confirm">Konfirmasi</a>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section"></section>
    <div class="container-fluid p-0"  id="confirm">
        <h2 class="text-center mt-0">Pinjam Buku</h2>
        <hr class="divider" />
    </div>
    <div class="container bg-light rounded" style="margin-top:10px">
    <div class="row">
        <div class="col-md-4">
            <img src="Assets/foto_produk/<?=$dt_buku['foto']?>" class="card-img-top">
        </div>
        <div class="col-md-8">
            <form action="masukkan_keranjang.php?id_buku=<?=$dt_buku['id_buku']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <td>Nama Buku</td>
                    <td><?=$dt_buku['nama_buku']?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><?=$dt_buku['deskripsi']?></td>
                </tr>
                <tr>
                    <td>Jumlah Pinjam</td>
                    <td><input type="number" name="jumlah_pinjam" value="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="btn btn-primary" id="submitButton" type="submit">Pinjam</button></td> 
                </tr>
                </thead>
            </table>
            </form>
        </div>
    </div>
    </div>

<?php

    include "footer.php";

?>