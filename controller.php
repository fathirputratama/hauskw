<?php

 $conn = mysqli_connect("localhost", "root", "", "projekaas");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $wadah = [];
        while ($row = mysqli_fetch_assoc($result) ) {
            $wadah[] = $row;
        }
        return $wadah;
    }

    function tambah($data){
        global $conn;
        //htmlspecialchars untuk blog tag elemen html
        //simpan data ke dalam variable superglobal $_post
        $nama=($data["nama"]);
        $thaitea=($data["thaitea"]);
        $greentea=($data["greentea"]);
        $taro=($data["taro"]);
        $brownsugar=($data["brownsugar"]);
        $hazelnut=($data["hazelnut"]);
        $redvelvet=($data["redvelvet"]);

    
        //data yang disimpam di $_POST masukan ke databse
        $query ="INSERT INTO jumlah_produk
             VALUES('', '$nama', '$thaitea', '$greentea','$taro','$brownsugar','$hazelnut','$redvelvet')";
            
            mysqli_query($conn, $query);
    
        //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
        return mysqli_affected_rows($conn);
    }
    
    function registrasi($data) {
        global $conn;
    
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
        // cek username sudah ada atau belum (agar username tidak sama)
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username' ");
        if ( mysqli_fetch_assoc($result) ) {
            echo "<script>
            alert('username ini sudah digunakan');
            </script>";
            return false;
        }
    
        // cek apakah password dan konfirmasi password sama
        if ( $password !== $password2 ) {
            echo  "<script>
            alert('Password yang anda masukkan tidak sesuai');
            </script>";
    
            return false;
        }
        
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    
        return mysqli_affected_rows($conn);
    }
?>