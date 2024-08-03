<?php 
// Belajar Function di PHP

// function adalah baris baris code untuk mempermudah pemograman
// 2 jenis function yaitu Built-in funtion dan User-Defined funtion

// Date/Time ini berhubungan dengan waktu
// time ()
// date ()
// mktime()
// strotime()

// echo date("l"); utk menampilkan hari 
// echo date("d"); utk menampilkan tanggal 
// echo date("M"); utk menampilkan bulan
// echo date("m"); utk menampilkan bulan dalam bentuk angka 
// echo date("l, d-M-Y");utk menampilkan tanggal dengan format tertentu


// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l") == echo("l", time())
// echo date('l', time() + 172800); Thursday (2 hari setelah hari ini)
// echo date('l', time() + 60 * 60 * 24 * 105); # Tuesday (105 hari setelah hari ini)
// echo date('l', time() - 60 * 60 * 24 * 100); # Sunday (100 hari sebelum hari ini)
// echo date('d M y', time() - 60 * 60 * 24 * 200); # 12 Jan 24 (200 hari sebelum hari ini)


//mktime
// ini untuk membuat detik waktu sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,11,19,1999));


// strtotime ini masukan nya pake string
// echo strtotime("19 nov 1999"); # 942966000
// echo date("l", strtotime("19 nov 1999")); # friday

// String: strlen() => menghitung panjang string; strcmp() => membandingkan string; explode() => memecah string menjadi array, htmlspecialchars() => menangani kode html


// Utility: var_dump() => mencetak isi variabel, array, object; isset() => mengecek apakah sebuah variabel sudah dibuat atau belum, menghasilkan boolean; empty() => apakah variabel kosong atau tidak; die() => memberhentikan program; sleep() => memberhentikan program sementara;
// $x = 1;
// var_dump(empty($x)); # boolean false
// $x = null;
// var_dump(empty($x)); # boolean true

 










?>
