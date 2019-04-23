<?php
include('config.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/fav.png"> <!-- Favicon-->
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Calysta Skincare</title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Calysta Skincare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi.php">Transaksi</a>
                </li>
                <li>
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Tables
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="list_produk.php">List Produk</a>
                        <a class="dropdown-item" href="list_jasa.php">List Jasa</a>
                        <a class="dropdown-item" href="list_pegawai.php">List Pegawai</a>
                        <a class="dropdown-item" href="list_pelanggan.php">List Pelanggan</a>
                        <!-- <div class="dropdown-divider"></div> -->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Tambah Data Baru
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="insert_produk.php">Tambah Produk</a>
                        <a class="dropdown-item" href="insert_jasa.php">Tambah Jasa</a>
                        <a class="dropdown-item" href="insert_pegawai.php">Tambah Pegawai</a>
                        <a class="dropdown-item" href="insert_pelanggan.php">Tambah Pelanggan</a>
                        <!-- <div class="dropdown-divider"></div> -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
