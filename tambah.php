<?php
require 'controller.php';
$conn = mysqli_connect("localhost","root", "", "db_students");

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script> 
        alert('data berhasil di input');
        document.location.href ='index.php';
        </script>";
    }else{
        echo "<script> 
        alert('data gagal di input');
        document.location.href ='index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<table border = "10">
    
<div class="d-flex justify-content-center">
<div class="card" style="width:70rem;">
  <div class="card-body">
   
</div>
<form action="" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
    
  <div class="mb-3">
    <label for="nis" class="form-label">Nis</label>
    <input type="number" class="form-control" id="nis" name="nis">
  </div>
    
  <div class="mb-3">
    <label for="rombel" class="form-label">Rombel</label>
    <input type="text" class="form-control" id="rombel" name="rombel">
  </div>
    
  <div class="mb-3">
    <label for="rayon" class="form-label">Rayon</label>
    <input type="text" class="form-control" id="rayon" name="rayon">
  </div>

  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <input type="text" class="form-control" id="status" name="status">
  </div>

  <div class="mb-3">
    <label for="hobi" class="form-label">Hobi</label>
    <input type="text" class="form-control" id="hobi" name="hobi">
  </div>

  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
    
  <div class="mb-3">
    <label for="merk_laptop" class="form-label">Merk Laptop</label>
    <input type="text" class="form-control" id="merk_laptop" name="merk_laptop">
  </div>
    
  <div class="mb-3">
    <label for="cita_cita" class="form-label">Cita-cita</label>
    <input type="text" class="form-control" id="cita_cita" name="cita_cita">
  </div>
    
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar">
  </div>
    
   

 
  <button type="submit" class="btn btn-dark" name="submit">Kirim...</button>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
