<head>
    <title>Keranjang</title>
</head>

<?php

    include "header.php";

?>

<!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">- Perpus Online - Keranjang</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-primary btn-xl" href="#cart">List Keranjang</a>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section"></section>
    <div class="container-fluid p-0"  id="cart">
        <h2 class="text-center mt-0">Keranjang</h2>
        <hr class="divider" />
    </div>
    <div class="container bg-light rounded" style="margin-top:10px">
        <table class="table table-hover striped">
            <thead>
            <tr>
                <th>NO</th>
                <th>Nama Buku</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach (@$_SESSION['keranjang'] as $key_produk => $val_produk): ?>

            <tr>
                <td><?=($key_produk+1)?></td>
                <td><?=$val_produk['nama_buku']?></td>
                <td><?=$val_produk['qty']?></td>
                <td><a href="hapus_keranjang.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>


            <?php endforeach ?>

            </tbody>
        </table>
        <a href="checkout.php" class="btn btn-primary">Check Out</a>

    </div>

    <?php

        include "footer.php";

    ?>