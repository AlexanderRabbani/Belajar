<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping / Perulangan</title>

</head>
<body> 
    <h1>Looping / Perulangan</h1>
    <a href="./index.php">Kembali</a>
    <hr>
    <?php
        // FOR
        echo 'Berikut ini hasil perulangan menggunakan FOR' . '<br>';
        for ($i=0; $i<=5 ; $i++) { 
            echo $i; 
            echo '<br>';
        }
        echo'<hr>';

        // WHILE
        echo 'Berikut ini hasil perulangan menggunakan WHILE' . '<br>';
        $a=0;
        while ($a <= 5) {
            $a++;
            echo $a . '<br>';
        }
        echo'<hr>';

        // DO WHILE
        echo 'Berikut ini hasil perulangan menggunakan DO WHILE' . '<br>';
        $a=0;
        do {
            $a++;
            echo $a . '<br>';
        } while ($a <= 5);
        
        echo'<hr>';

        // NESTED LOOP
        echo 'Berikut ini hasil perulangan menggunakan NESTED LOOP' . '<br>';
        for ($a=0; $a <=5; $a++)  {
            for ($b=0 ; $b <=$a ; $b++) { 
                echo '*';
        }
        echo'<br>';
    }
        echo'<hr>';

    ?>

</body>
</html>