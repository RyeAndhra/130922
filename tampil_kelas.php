<!DOCTYPE html>

<?php include 'navbar.php' ?>

<html>

<head>

    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-fluid mt-3">
        <h3>KELAS</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                <th>NO</th>
                <th>NAMA KELAS</th>
                <th>KELOMPOK</th>
                <th>ANGKATAN</th>
                </tr>
            </thead>
            <tbody>

                <?php

                    include "koneksi.php";
                    $qry_kelas = mysqli_query($conn,"select * from kelas");
                    $no = 0;
                    while($data_kelas = mysqli_fetch_array($qry_kelas)) {
                        $no++;

                ?>

                    <tr>
                    <td><?=$no;?></td>
                    <td><?=$data_kelas['nama_kelas'];?></td>
                    <td><?=$data_kelas['kelompok'];?></td>
                    <td><?=$data_kelas['angkatan'];?></td>
                    </tr>

                <?php

                    }

                ?>

            </tbody>
        </table>

        <a href="tambah_kelas.php" class="btn btn-primary">Tambah Kelas</a>

    </div>

</body>

</html>