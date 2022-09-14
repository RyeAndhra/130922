<head>
    <title>Transaksi</title>
</head>

<?php

    include "header.php";

?>

<!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Perpus Online - Transaksi</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-primary btn-xl" href="#histori">Histori</a>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section"></section>
    <div class="container-fluid p-0"  id="histori">
        <h2 class="text-center mt-0">Histori Peminjaman</h2>
        <hr class="divider" />
    </div>
    <div class="container bg-light rounded" style="margin-top:10px">
        <table class="table table-hover table-striped">
            <thead>
                <th>NO</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal harus Kembali</th>
                <th>Nama Buku</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>

                <?php

                    include "koneksi.php";
                    $qry_histori = mysqli_query($conn, "select * from peminjaman_buku order by id_peminjaman_buku desc");
                    $no = 0;
                    while($dt_histori = mysqli_fetch_array($qry_histori)) {
                        $no++;
                        $buku_dipinjam = "<ol>";
                        $qry_buku = mysqli_query($conn, "select * from detail_peminjaman_buku join buku on buku.id_buku = detail_peminjaman_buku.id_buku where id_peminjaman_buku = '".$dt_histori['id_peminjaman_buku']."'");
                        while($dt_buku = mysqli_fetch_array($qry_buku)) {
                            $buku_dipinjam.="<li>".$dt_buku['nama_buku']."</li>";

                        }
                        $buku_dipinjam.="</ol>";
                        $qry_cek_kembali = mysqli_query($conn, "select * from pengembalian_buku where id_peminjaman_buku = '".$dt_histori['id_peminjaman_buku']."'");
                        if(mysqli_num_rows($qry_cek_kembali) > 0) {
                            $dt_kembali = mysqli_fetch_array($qry_cek_kembali);
                            $denda = "Denda Rp. ".$dt_kembali['denda'];
                            $status_kembali = "<label class='alert alert-success'>Sudah kembali <br>".$denda."</label>";
                            $button_kembali = "";

                        } else {
                            $status_kembali = "<label class='alert alert-danger'>Belum kembali</label>";
                            $button_kembali = "<a href='kembali.php?id=".$dt_histori['id_peminjaman_buku']."' class='btn btn-warning' onclick='return confirm(\"Apakah anda yakin mau dikembalikan?\")'>Kembalikan</a>";
                        }
                    
                ?>

                <tr>
                <td><?=$no?></td>
                <td><?=$dt_histori['tanggal_pinjam']?></td>
                <td><?=$dt_histori['tanggal_kembali']?></td>
                <td><?=$buku_dipinjam?></td>
                <td><?=$status_kembali?></td>
                <td><?=$button_kembali?></td>
                </tr>

            <?php

                }

            ?>

            </tbody>
        </table>
    </div>
    
<?php

    include "footer.php";

?>