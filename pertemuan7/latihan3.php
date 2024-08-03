<?php 
// $_GET adalah salah satu metode yang digunakan dalam PHP untuk mengirimkan data dari klien (misalnya, browser web) ke server. Metode ini mengirimkan data melalui URL, biasanya digunakan dalam formulir HTML dengan metode GET atau ketika Anda menambahkan parameter ke URL.

// Berikut adalah beberapa kegunaan umum dari $_GET:

// Mengambil Data dari URL:

// $_GET digunakan untuk mengambil data yang dikirimkan melalui URL. Misalnya,
//  jika kita memiliki URL seperti example.com/page.php?name=John&age=25, 
//  kita dapat mengakses nilai name dan age menggunakan $_GET['name'] dan $_GET['age'].
// Navigasi Halaman:

// $_GET sering digunakan untuk navigasi antara halaman.
//  Misalnya, situs web mungkin memiliki tautan seperti example.com/products.php?category=books 
//  untuk menampilkan produk dalam kategori "books".

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <hi>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>    

<form action="Latihan4.php" method="post">
        Masukan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
</body>
</html>


