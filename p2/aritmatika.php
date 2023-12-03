<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika</title>
</head>
<body>
    <h1>Aritmarika</h1>
    <a href="./index.php">Kembali</a>
    <hr>
    <?php
        echo 'Operasi Pertambahan <br>';
        echo '<br>';
        $angka1 = 4;
        $angka2 = 10;

        // diket
        echo'Angka Pertama yaitu :' . $angka1 . '<br>';
        echo 'Angka Kedua yaitu : '. $angka2 . '<br>';

        // Operasi
        $tambah = $angka1 + $angka2 ;
        echo 'Hasil Pertambahan adalah = '.$tambah ;

        echo '<hr>';

        echo 'Operasi Perkalian <br>';
        $angka1 = 4;
        $angka2 = 10;

        // diket
        echo'Angka Pertama yaitu :' . $angka1 . '<br>';
        echo 'Angka Kedua yaitu : '. $angka2 . '<br>';

        // Operasi
        $kali = $angka1 * $angka2 ;
        echo 'Hasil Perkalian adalah = '.$kali ;

        echo '<hr>';

        echo 'Operasi Pembagian <br>';
        $angka1 = 4;
        $angka2 = 10;

        // diket
        echo'Angka Pertama yaitu :' . $angka1 . '<br>';
        echo 'Angka Kedua yaitu : '. $angka2 . '<br>';

        // Operasi
        $bagi = $angka1 / $angka2 ;
        echo 'Hasil Pembagian adalah = '.$bagi ;

        echo '<hr>';

        echo 'Operasi Pengurangan <br>';
        $angka1 = 4;
        $angka2 = 10;

        // diket
        echo'Angka Pertama yaitu :' . $angka1 . '<br>';
        echo 'Angka Kedua yaitu : '. $angka2 . '<br>';

        // Operasi
        $kurang = $angka1 - $angka2 ;
        echo 'Hasil Pengurangan adalah = '.$kurang ;

        echo '<hr>';

        echo 'Operasi Mod / Sisa Hasil Bagi <br>';
        $angka1 = 10;
        $angka2 = 3;

        // diket
        echo'Angka Pertama yaitu :' . $angka1 . '<br>';
        echo 'Angka Kedua yaitu : '. $angka2 . '<br>';

        // Operasi
        $mod = $angka1 % $angka2 ;
        echo 'Hasil Mod adalah = '.$mod ;
        echo '<hr>';
    ?>
</body>
</html>