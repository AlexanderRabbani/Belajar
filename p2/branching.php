<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <h1>Branching / Percabangan</h1>
    <a href="./index.php">Kembali</a>
    <hr>

    <?php

        // IF
        
        $angka1=7;
        $angka2=5;

        echo 'Angka Pertama : ' . $angka1 . '<br>';
        echo 'Angka Kedua : ' . $angka2 . '<br>';
        echo '<hr>';

        // IF
        echo 'Perhitungan menggunakan IF' . '<br>';
        if ($angka1 > $angka2) {
            echo 'Benar!' ;
        }
        echo '<hr>';
       
        // IF ELSE
        echo 'Perhitungan menggunakan If Else' . '<br>';
        if ($angka1 > $angka2) {
            echo 'Benar';
        } else {
            echo 'Salah';
        }
        echo '<hr>';

        // IF ELSE IF
        echo 'Perhitungan menggunakan If Else If' . '<br>';
        if ($angka1 > $angka2) {
            echo 'Benar';
        } elseif ($angka1 < $angka2){
            echo 'Salah';
        } elseif ($angka1 = $angka2) {
            echo 'Sama';
        } else {
            echo 'Angkanya tidak jelas';
        }
        echo '<hr>';  

        //SWITCH CASE

        $huruf = 'cash';
        $rumah = 150;
        $bunga = 20;

        echo 'Berikut ini hasil pengerjaan menggunakan SWITCH' . '<br>';
        switch ($huruf) {
            case ('kredit'):
                $kredit = $rumah + $bunga ;
                echo 'Jika sistem pembayarannya ' . $huruf . ' maka jumlah yang harus dibayarkan sebesar Rp. ' . $kredit;
                break;
            case ('cash'):
                $cash = $rumah ;
                echo 'Jika sistem pembayarannya ' . $huruf . ' maka jumlah yang harus dibayarkan sebesar Rp. ' . $cash;
                break;
            default:
                echo 'Harap pilih sistem pembayaran yang tersedia!';
                break;
        }
        echo '<hr>';
        echo 'Berikut ini hasil pengerjaan menggunakan IF' . '<br>';

        if ($huruf === 'kredit') {
            $kredit = $rumah + $bunga ;
            echo 'Jika sistem pembayarannya ' . $huruf . ' maka jumlah yang harus dibayarkan sebesar Rp. ' . $kredit;
        } 
            elseif ($huruf === 'cash') {
            $cash = $rumah;
            echo 'Jika sistem pembayarannya ' . $huruf . ' maka jumlah yang harus dibayarkan sebesar Rp. ' . $cash;
            }
                else {
                   echo 'Harap pilih sistem pembayaran yang tersedia!';
                }
        

    ?>

</body>
</html>