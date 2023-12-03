<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi String</title>
</head>
<body>
<h1>Manipulasi String</h1>

<?php

$text = 'nama saya ALEXANDER rabbani';
$split = 'Alexander';

// UPPERCASE 
echo '<h3>Uppercase</h3>';
echo 'Kegunaan : Mengubah suatu kalimat menjadi huruf besar semua.' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Menjadi : ' . strtoupper($text). '<br>';

// LOWERCASE
echo '<h3>Lowercase</h3>';
echo 'Kegunaan : Mengubah suatu kalimat menjadi huruf kecil semua.' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Menjadi : ' . strtolower($text). '<br>';

//CAPITALIZE
echo '<h3>Capitalize</h3>';
echo 'Kegunaan : Mengubah suatu kalimat menjadi huruf awal capital semua.' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Menjadi : '. ucwords(strtolower($text)). '<br>';

//MENGHITUNG JUMLAH STRING
echo '<h3>Menghitung Jumlah String</h3>';
echo 'Kegunaan : untuk menghitung jumlah huruf pada suatu kalimat' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Jumlah huruf pada kalimat tersebut sebanyak : '. strlen($text). ' kata.'.'<br>';

//REPLACE
echo '<h3>Replace</h3>';
echo 'Kegunaan : Untuk menganti kata atau huruf pada suatu kalimat' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Menjadi : ' . strtolower(str_replace(' ','-', $text)) . '<br>';

//POS
echo '<h3>POS</h3>';
echo 'Kegunaan : untuk menghitung/ mencari kata terletak pada indeks keberapa' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Terletak pada indeks ke : ' . strpos($text,'rabbani') . '<br>';

//SPLIT
echo '<h3>Split</h3>';
echo 'Kegunaan : untuk mencari indeks per huruf' . '<br>';
echo 'Contoh : '. $text .'<br>';
print_r (str_split($split)) . '<br>';

//RANDOM / SHUFFLE
echo '<h3>Shuffle</h3>';
echo 'Kegunaan : untuk mengacak huruf pada suatu kalimat. Bisa digunakan juga untuk kode unik' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Menjadi : ' . str_shuffle($text) . '<br>';

//SUBSTR
echo '<h3>Substr</h3>';
echo 'Kegunaan : untuk mengambil kata pada indeks tertentu, dan sebanyak yang ditentukan' . '<br>';
echo 'Contoh : '. $text .'<br>';
echo 'Menjadi : ' . substr($text,10,15) . '<br>';

//CONTOH CASE mengubah tiga angka belakang
echo '<h3>Contoh Case</h3>';
$wo = 'BBI-7643-907988-001';
echo 'Nomor WO awal : ' . $wo .'<br>';
$lastNumber = substr($wo,-3); // mengambil 3 angka dari belakang
$nextNumber = (int)$lastNumber+1;
$nextVal = sprintf('%03d', $nextNumber);

// CARA 1
$lastValue = substr($wo,0,15);
echo 'Menjadi : ' . $lastValue.$nextVal.'<br>';

// CARA2
$spt = explode('-', $wo);
$fixed = $spt[0]. '-'. $spt[1].'-'. $spt[2].'-'.$nextVal;
echo 'Menjadi : ' . $fixed;

?>

    
</body>
</html>