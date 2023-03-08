<?php
    $conn = mysqli_connect("localhost", "root", "", "db_students");

    function query($query ){
        global $conn;
        $result = mysqli_query($conn, $query);
        $wadah = [];
        while( $baju = mysqli_fetch_assoc($result) ){
            $wadah[] = $baju;
        }
        return $wadah;
    }


    function tambah($data){
        global $conn;
         
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query ="INSERT INTO students
        VALUES
        ('', '$nama',  '$nis', '$rombel', '$rayon', '$status', '$hobi',  '$alamat', '$merk_laptop', '$cita_cita', '$gambar')
    ";
        mysqli_query($conn, $query);    

         
        return mysqli_affected_rows($conn);  
    }
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");
        return mysqli_affected_rows($conn);     
        }

        function ubah($data){
            global $conn;
            $id = $data["id"];
            $nama = htmlspecialchars($data["name"]);
            $nis = htmlspecialchars($data["nis"]);
            $rombel = htmlspecialchars($data["rombel"]);
            $rayon = htmlspecialchars($data["rayon"]);
            $status = htmlspecialchars($data["status"]);
            $hobi = htmlspecialchars($data["hobi"]);
            $alamat = htmlspecialchars($data["alamat"]);
            $merk_laptop = htmlspecialchars($data["merk_laptop"]);
            $cita_cita = htmlspecialchars($data["cita_cita"]);
            $gambar = htmlspecialchars($data["gambar"]);
            
    
            $query = "UPDATE students SET
            gambar ='$gambar',
            nama = '$nama',
            nis = '$nis',
            rombel = '$rombel',
            rayon = '$rayon',
            status = '$status',
            hobi = '$hobi',
            alamat = '$alamat',
            merk_laptop = '$merk_laptop',
            cita_cita = '$cita_cita'
            WHERE id = '$id'
            ";

            mysqli_query($conn, $query);

    
            return mysqli_affected_rows($conn);
        }
?>