<?php

require 'controller.php';
$students = query("SELECT * FROM students");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi ke database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: #DF7857;
    }

    table {
        text-align: center;
        background-color: #FFFF;
    }

    .card {
        background-color: #F5E9CF;
    }
</style>

<body>
    <div style="padding:70px">
        <div class="container">
            <div class="card">
                <div style="text-align:center">
                    <h1>DATA SISWA</h1>
                </div>
                <div style="padding-left:10px">
                    <a href="tambah.php">
                        <button type="button" class="btn btn-success">Tambah</button>
                    </a>

                </div>
                <br>
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Rombel</th>
                        <th>Rayon</th>
                        <th>Status</th>
                        <th>Hobi</th>
                        <th>Alamat</th>
                        <th>Merk Laptop</th>
                        <th>Cita-Cita</th>
                        <th>Aksi</th>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($students as $student) { ?>
                            <tr>
                                <td>
                                    <?= $i ?>
                                </td>
                                <td>
                                    <?= $student["nama"] ?>
                                </td>
                                <td>
                                    <?= $student["nis"] ?>
                                </td>
                                <td>
                                    <?= $student["rombel"] ?>
                                </td>
                                <td>
                                    <?= $student["rayon"] ?>
                                </td>
                                <td>
                                    <?= $student["status"] ?>
                                </td>
                                <td>
                                    <?= $student["hobi"] ?>
                                </td>
                                <td>
                                    <?= $student["alamat"] ?>
                                </td>
                                <td>
                                    <?= $student["merk_laptop"] ?>
                                </td>
                                <td>
                                    <?= $student["cita_cita"] ?>
                                </td>
                                <td>
                                    <a href="delete.php?id=<?= $student["id"] ?>"
                                        onclick="return confirm ('yakin mau dihapus?')">
                                        <button type="button" class="btn btn-danger">Hapus</button></a>

                                    <a href="update.php?id=<?= $student["id"] ?>">
                                        <button type="button" class="btn btn-warning">Ubah</button></a>

                                    <a href="lihat.php?id=<?= $student["id"] ?>">
                                        <button type="button" class="btn btn-primary">Lihat</button></a>
                                </td>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
</body>

</html>