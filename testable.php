<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
require 'controller.php';
$jumlah_produk = query("SELECT * FROM jumlah_produk");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
            color: white;
        }
        button a {
            color: white;
            text-decoration: none;
        }
        .tomboltambah{
            text-decoration: none;
            color: black;
        }
        table{
            margin-left: 200px;
            text-align: center;
            border-collapse:collapse;
            font:normal normal 13px Verdana,Arial,Sans-Serif;
            color:#333333;
        }
        table th {
            background:#8a489d;
            color:#DCDCDC;
            font-weight:bold;
            font-size:15px;
        }
        table th, table td {
            vertical-align:top;
            padding:5px 10px;
            border:1px solid #696969;
        }
        table tr {
            background:#F5FFFA;
        }
        table tr:nth-child(even) {
            background:#F0F8FF;
        }
        td a {
            text-decoration:none;
        }
        body{
                background: url(img/bgreg.jpg)no-repeat;
                background-size: cover;
            }
    </style>
</head>
<body>
    <button style="background-color:#8a489d ; color:white border-radius="5";><a href="index.php">Kembali</a></button>
    <h1>List Pelanggan</h1>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Thai Tea</th>
            <th>Green Tea</th>
            <th>Taro</th>
            <th>Brown Sugar</th>
            <th>Choco Hazelnut</th>
            <th>Red Velvet</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 1 ?>
        <?php foreach ($jumlah_produk as $jumlah ) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $jumlah["nama"]?></td>
            <td><?= $jumlah["thaitea"]?></td>
            <td><?= $jumlah["greentea"]?></td>
            <td><?= $jumlah["taro"]?></td>
            <td><?= $jumlah["brownsugar"]?></td>
            <td><?= $jumlah["hazelnut"]?></td>
            <td><?= $jumlah["redvelvet"]?></td>
        </tr>
        <?php $no++ ?>
        <?php } ?>
    </tbody>
</table>
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>