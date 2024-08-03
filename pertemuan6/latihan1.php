<?php 
// Review materi Array sebelum nya


// array
// membuat array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", true];

// menampilkan array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array 
// catatan: echo tidak bisa digunakan untuk mencetak array, karena echo hanya bisa mencetak isi array nya
// echo $arr[0];

// menampilkan array Multi Dimensi

<?php
//    Array Muliti Dimensi
echo "<br>";
$angka = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
echo "<br>";
//      Cara mencetak 1 element array multi dimensi, contoh: 6
echo $angka[1][2];
/* 6 */
echo "<br>";
//      Cara mencetak semua element array multi dimensi
foreach($angka as $angka) :
  foreach($angka as $ang) :
    echo $ang;
    /* 123456789 */
  endforeach;
endforeach;
?>