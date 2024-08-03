<?php 
// Belajar PHP Materi tentang GET dan POSt


// Variabel Scope / Lingkup variabel
// $x = 10; # ini variabel lokal untuk halaman ini 

// function tampilx() { 
//    $x = 20;
//    global $x; # ini untuk mencari variabel yang diluar functionnya
//    echo $x; # ini variabel lokal untuk function saja

// }

// tampilx();
// echo "<br>";
// echo $x

// Variabel Superglobals | variabel global milik php
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// variabel superglobals ini , semuanya adalah array associative
$_GET["nama"] = "Affan Saragih"; 
var_dump($_GET);

$ebooks = [
    [
      'Picture' => 'LearningPython.jpeg',
      'Title' => 'Learning Python',
      'Category' => 'Programming',
      'Authors' => 'Mark Lutz',
      'Published' => "O'Reilly Media",
      'Year' => 2013,
    ], 
    [
      'Picture' => 'cleancode.jpeg',
      'Title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
      'Category' => 'Software Development',
      'Authors' => 'Robert C. Martin',
      'Published' => 'Prentice Hall',
      'Year' => 2008,
    ],
    [
      'Picture' => 'ArtificialIntelligence.jpeg',
      'Title' => 'Artificial Intelligence: A Modern Approach',
      'Category' => 'Artificial Intelligence',
      'Authors' => 'Stuart Russell, Peter Norvig',
      'Published' => 'Pearson',
      'Year' => 2020,
    ],
    [
      'Picture' => 'DataSciencefromScratch.jpeg',
      'Title' => 'Data Science from Scratch: First Principles with Python',
      'Category' => 'Data Science',
      'Authors' => 'Joel Grus',
      'Published' => "O'Reilly Media",
      'Year' => 2019,
    ],
    [
      'Picture' => 'IntroductiontoAlgorithms.jpeg',
      'Title' => 'Introduction to Algorithms',
      'Category' => 'Algorithms',
      'Authors' => 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein',
      'Published' => 'MIT Press',
      'Year' => 2009,
    ],
  ];

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ebook Teknologi</title>
  </head>
  <body>
    <h1>Ebooks Teknologi</h1>
    <ul>
      <?php foreach($ebooks as $ebook) : ?>
        <li>
          <a href="latihan2.php?Picture=<?= $ebook['Picture']; ?>&Title=<?= $ebook['Title']; ?>&Category=<?= $ebook['Category']; ?>&Authors=<?= $ebook['Authors']; ?>&Published=<?= $ebook['Published']; ?>&Year=<?= $ebook['Year']; ?>">
            <img src="image/ebooks-teknologi/<?= $ebook['Picture']; ?>" alt="<?= $ebook['Title']; ?>">
            <p><?= $ebook['Title']; ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
  </html>



?>