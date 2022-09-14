<head>
    <title>Buku</title>
</head>

<?php

    include "header.php";

?>

<!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Perpus Online - Buku</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Silahkan Pinjam Buku!</p>
                    <a class="btn btn-primary btn-xl" href="#buku">Daftar Buku</a>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section"></section>
    <div class="container-fluid p-0"  id="buku">
        <h2 class="text-center mt-0">Daftar Buku</h2>
        <hr class="divider" />
    </div>
    <div class="container bg-light rounded" style="margin-top:10px">
    <div class="row">

        <?php
        
            include "koneksi.php";
            $qry_buku = mysqli_query($conn, "select * from buku");
            while($dt_buku = mysqli_fetch_array($qry_buku)) {
            
        ?>

        <div class="col-md-3">
        <div class="card">
            <img src="Assets/foto_produk/<?=$dt_buku['foto']?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0, 50)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
            </div>
        </div>
        </div>

        <?php

            }

        ?>

    </div>
    <br>
    <a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>
    </div>

<?php

include "footer.php";

?>