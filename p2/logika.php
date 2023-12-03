<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika</title>
</head>
<body>
    <h1>Logika / Operasi Perbandingan</h1>
    <a href="./index.php"> Kembali</a>
    <hr>
    <?php
        $angka1 = 10;
        $angka2 = 4;

        //Lebih Besar

        echo'Angka Pertama =' . $angka1 . '<br>';
        echo 'Angka Kedua = '. $angka2 . '<br>';

        echo '<hr>';

        echo $angka1 . ' Lebih Besar dari ' . $angka2 . '?' . '<br>';
        echo 'Jika hasilnya = 1, maka jawabannya benar' . '<br>'; 
        echo ' Jika hasilnya = 0, maka jawabannya salah' . '<br>';

        echo 'Jadi Hasilnya adalah : ' . ($angka1 > $angka2) ;
        echo '<hr>';

        // Lebih Kecil

        echo $angka1 . ' Lebih Kecil dari ' . $angka2 . ' ? ' . ($angka1 < $angka2 ? 'Ya' : 'Tidak');
        echo '<hr>';

        // Besar Sama dari
        echo $angka1 . ' Besar Sama dari ' . $angka2 . ' ? ' . ($angka1 >= $angka2 ? 'Ya' : 'Tidak');
        echo '<hr>';

        // Besar sama dari
        echo $angka1 . ' Kecil Sama dari ' . $angka2 . ' ? ' . ($angka1 <= $angka2 ? 'Ya' : 'Tidak');
        echo '<hr>';

        // Sama dengan dari
        echo $angka1 . ' Sama Dengan dari ' . $angka2 . ' ? ' . ($angka1 == $angka2 ? 'Ya' : 'Tidak');
        echo '<hr>';

        // Sama dengan dari PASTI!
        echo $angka1 . ' Tidak sama dengan dari ' . $angka2 . ' ? ' . ($angka1 === $angka2 ? 'Ya' : 'Tidak');
        echo '<hr>';

        // Tidak sama dengan dari
        echo $angka1 . ' Sama Dengan dari ' . $angka2 . ' ? ' . ($angka1 != $angka2 ? 'Ya' : 'Tidak');
        echo '<hr>';

        // Tidak Sama dengan dari PASTI!
        echo $angka1 . ' Tidak sama dengan dari ' . $angka2 . ' ? ' . ($angka1 !== $angka2 ? 'Ya' : 'Tidak');
        echo '<hr>';

    ?>
</body>
</html>