<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
include 'controller.php';

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>alert('Data berhasil disimpan.');window.location='testable.php';</script>";
    }else{
        echo "<script>alert('Data gagal disimpan.');window.location='testable.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>
    <style>
        *,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    font-size: 62.5%;
}

body {
    background: #8a489d;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 0;
    line-height: 1.5;
    display: flex;
    height: 100vh;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.wrapper {
    background: #fff;
    width: 90%;
    padding: 2rem;
    box-shadow: 0 0px 2.2px rgba(0, 0, 0, 0.028), 0 0px 5.3px rgba(0, 0, 0, 0.04), 0 0px 10px rgba(0, 0, 0, 0.05);
}

h2 {
    background: #8a489d;
    color: white;
    letter-spacing: 0.1rem;
    padding: 1rem;
    cursor: default;
}

form,
input,
button {
    font-family: inherit;
    font-size: initial;
}

.form-group label {
    display: block;
    margin: 2rem 0 0.5rem 0;
}

.form-group input[type="text"],
.form-group input[type="email"] {
    width: 100%;
    padding: 1rem 0.8rem;
    border: 1px solid rgba(0, 0, 0, 0.2);
    outline: 0;
    transition: border 0.15s;
}

.form-group input[type="text"],
.form-group input[type="email"] {
    height: 4.6rem;
}

.form-group textarea {
    resize: vertical;
}

.submit {
    background: #8a489d;
    color: white;
    font-weight: bold;
    margin-top: 1rem;
    padding: 1rem 1.5rem;
    border: none;
    cursor: pointer;
    transition: background 0.15s;
}

.submit:hover {
    background: rgba(173, 216, 230, 1);
    color: black;
}


.form-group input[type="text"]:focus,
.form-group input[type="email"]:focus {
    border: 1px solid #1dbcfd;
}

/* responsive */

@media screen and (min-width: 576px) {
    .wrapper {
        width: 70%;
    }
}

@media screen and (min-width: 768px) {
    .wrapper {
        width: 55%;
    }
}

@media screen and (min-width: 992px) {
    .wrapper {
        width: 45%;
    }
}

@media screen and (min-width: 1200px) {
    .wrapper {
        width: 35%;
    }
}
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post">
            <div class="form-group">
                <h3>Form Pembelian</h3>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" min="0" required autofocus autocomplete="off" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="thaitea">Thai Tea</label>
                <input type="number" id="jumlah1" name="thaitea" min="0" placeholder="Masukkan Jumlah">
            </div>
            <div class="form-group">
                <label for="greentea">Green Tea</label>
                <input type="number" id="jumlah2" name="greentea" min="0" placeholder="Masukkan Jumlah"">
            </div>
            <div class="form-group">
                <label for="taro">Taro</label>
                <input type="number" id="jumlah3redvelvet" name="taro" min="0" placeholder="Masukkan Jumlah">
            </div>
            <div class="form-group">
                <label for="brownsugar">Brown Sugar</label>
                <input type="number" id="jumlah4" name="brownsugar" min="0" placeholder="Masukkan Jumlah">
            </div>
            <div class="form-group">
                <label for="hazelnut">Choco Hazelnut</label>
                <input type="number" id="jumlah5" name="hazelnut" min="0" placeholder="Masukkan Jumlah">
            </div>
            <div class="form-group">
                <label for="redvelvet">Red Velvet</label>
                <input type="number" id="jumlah6" name="redvelvet" min="0" placeholder="Masukkan Jumlah">
            </div>

            <div class="form-group">
                <button type="submit" class="submit" name="submit">Beli</button>
            </div>
        </form>


    </div>
</body>

</html>