<?php 
// Cek apakah tidak ada data di $_GET
if (!isset($_GET['Picture']) ||
    !isset($_GET['Title']) ||
    !isset($_GET['Category']) ||
    !isset($_GET['Authors']) ||
    !isset($_GET['Published']) ||
    !isset($_GET['Year'])) {
  // jika salah satu parameter tidak diset, redirect ke latihan1.php
  header("Location: latihan1.php");
  exit();
}

// Jika semua parameter GET ada, tampilkan detail ebook
$picture = $_GET['Picture'];
$title = $_GET['Title'];
$category = $_GET['Category'];
$authors = $_GET['Authors'];
$published = $_GET['Published'];
$year = $_GET['Year'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail E-Book</title>
</head>
<body>
  <h1>Detail E-Book</h1>

  <a href="latihan1.php">Kembali ke Daftar E-Book Teknologi</a>
  
  <ul style='list-style-type: none'>
    <li>
      <img src="image/ebooks-teknologi/<?= $picture; ?>" alt="<?= $title; ?>">
    </li>
    <li>Judul: <?= $title; ?></li>
    <li>Kategori: <?= $category; ?></li>
    <li>Penulis: <?= $authors; ?></li>
    <li>Diterbitkan oleh: <?= $published; ?></li>
    <li>Terbit tahun: <?= $year; ?></li>
  </ul>
</body>
</html>