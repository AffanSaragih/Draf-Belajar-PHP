<?php 
// Pengulangan pada array
// bisa menggunakan for / foreach
$angka = [3,2,15,20,11,77,89,100];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both:}
    </style>
</head>
<body>
<!-- for -->
<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<!-- foreach => untuk disetiap elemen di dalam array maka lakukan sesuatu atau echo. 
 $angka itu array, kemudian lakukan looping untuk setiap elemen, ambil 1 elemen terus tampilkan, ambil 1 elemen terus tampilkan', saat mengambil 1 elemen maka harus disimpan dulu dalam sebuah variabel baru variabelnya ditampilkan, $angka adalah variabel tersebut -->
  <?php foreach($numbers as $number) : ?> 
<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>    


<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
 <?php endforeach; ?>
</body>
</html>