<?php 
// koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn; // Mengakses variabel global $conn
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; // Menambahkan $row ke array $rows
    }
    return $rows; // Mengembalikan $rows
}
?>
