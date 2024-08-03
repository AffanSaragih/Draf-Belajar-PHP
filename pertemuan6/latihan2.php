<?php 
// Belajar PHP | Materi ASSOCIATIVE ARRAY
// definisinya sama seperti array nuremik, kecuali
// key-nya adalah string yang kita buat sendiri

// contoh membuat array associative untuk beberapa produk

$produk = [
    "nama" => "Laptop",
    "merek" => "Acer",
    "harga" => "15000000",
    "stok" => "10",
];
// menampilkan 1 element array associative
echo $produk["stok"]; # 10



echo "<br>";
//  Array associative bersarang/multidimensi
$produk = [
    [
    "nama" => "Laptop",
    "merek" => "Acer",
    "harga" => "15000000",
    "stok" => "10",
    ],
    [
    "nama" => "Laptop",
    "merek" => "Asus",
    "harga" => "17000000",
    "stok" => "15",
    "warna" => ["Hitam, merah, silver"]
    ]
];
// menampilkan 1 element nya
echo $produk[1]["nama"]; // Output : Nama produk adalah laptop
echo "<br>";
echo $produk[1]["warna"][2]; // warna produk

// dalam associative urutan terbalik tidak masalah

$produk2 = [
    [
    "nama" => "Smartphone",
    "harga" => "5000000",
    "stok" => "25",
    "warna" => "Merah",
    "merek" => "Xiaomi",
    "gambar" => "img1.jpeg"
    ],
    [
    "nama" => "Tablet",
    "harga" => "29000000",
    "stok" => "25",
    "merek" => "Apple",
    "warna" => "GOld",
    "gambar" => "img.2.jpeg"
    ]
]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>
<body>
  <h1>Daftar Mahasiswa 2</h1>
  <?php foreach($mahasiswa2 as $mhs2) : ?>
    <ul>
      <li>Nama : <?= $mhs2['nama']; ?></li>
      <li>NRP : <?= $mhs2['nrp']; ?></li>
      <li>Email : <?= $mhs2['email']; ?></li>
      <li>Jurusan : <?= $mhs2['jurusan']; ?></li>
      <li>
        <img src='img/<?= $mhs2['gambar']; ?>'>
      </li>
    </ul>
  <?php endforeach; ?>
</body>
</html>