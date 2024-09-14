<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query database
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);

// Cek apakah query berhasil
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}

// Kumpulkan data dari hasil query ke dalam array
$mahasiswa = [];
while ($row = mysqli_fetch_assoc($result)) {
    $mahasiswa[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title> 
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
    <tr> 
      <td><?= $i; ?></td>
      <td>
        <a href="">ubah</a> |
        <a href="">hapus</a> 
      </td>
      <td><img src="img/<?php echo $row["gambar"]; ?>" width="35" height="40"></td>
      <td><?= $row["nrp"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["jurusan"]; ?></td>
     </tr>
     <?php $i++; ?>
     <?php endforeach; ?>  
  </table>
</body>
</html>
