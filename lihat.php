<?php
  
  require 'controller.php';
  $id = $_GET["id"];
  $student = query ("SELECT * FROM students WHERE id = $id")[0];
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        p{
            margin:0!important;
        }
    </style>
</head>

<body>
    <div style="padding:20px">
    <div style="width:55%;margin:auto;padding:2px;border:1px solid gray;border-radius:10px">
        <div style="display:flex;justify-content:center;margin-bottom:10px" >
            <img src="img/<?=$student["gambar"] ?>" width="200px" height="200px" style="border-radius:100%;object-fit:cover">
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">Nama</p>
            <p>:</p>
            <p><?= $student["nama"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">nis</p>
            <p>:</p>
            <p><?= $student["nis"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">rombel</p>
            <p>:</p>
            <p><?= $student["rombel"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">rayon</p>
            <p>:</p>
            <p><?= $student["rayon"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">status</p>
            <p>:</p>
            <p><?= $student["status"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">hobi</p>
            <p>:</p>
            <p><?= $student["hobi"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">alamat</p>
            <p>:</p>
            <p><?= $student["alamat"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">merk_laptop</p>
            <p>:</p>
            <p><?= $student["merk_laptop"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">cita_cita</p>
            <p>:</p>
            <p><?= $student["cita_cita"]?></p>
        </div>
    </div>
    </div>
    <!-- <ul>
        <li>gambar:<img src="img/<?=$student["gambar"] ?>" width="200px" height="200px"></li>
        <li>Nama : <?= $student["nama"]?></li>
        <li>NIS : <?= $student["nis"]?></li>
        <li>Rombel : <?= $student["rombel"]?></li>
        <li>Rayon : <?= $student["rayon"]?></li>
        <li>Status : <?= $student["status"]?></li>
        <li>Hobi : <?= $student["hobi"]?></li>
        <li>Alamat : <?= $student["alamat"]?></li>
        <li>Merk Laptop : <?= $student["merk_laptop"]?></li>
        <li>Cita Cita : <?= $student["cita_cita"]?></li>
        

    </ul> -->
    
</body>
</html>
