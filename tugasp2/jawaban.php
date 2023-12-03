<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jawaban Tugas Pertemuan 2</title>
</head>

<body>
  <a href="./index.php">Kembali ke Soal</a>

  <?php
  echo '<h2>Jawaban Soal</h2>';
  echo '<h4>No.1</h4>' . '<br>';

  // JAWABAN NO.1 MENGGUNAKAN SWITCH CASE 

  $nilai = 78;
  $nama = 'Riyanti';

  echo 'Nilai Siswa dengan nama ' . $nama . ' yaitu ' . $nilai . ' berhak mendapatkan : ';
  if ($nilai > 80 && $nilai <= 100) {
    echo 'GRADE A dan LULUS';
  } elseif ($nilai > 70 && $nilai <= 80) {
    echo 'GRADE B+ dan LULUS';
  } elseif ($nilai > 65 && $nilai <= 70) {
    echo 'GRADE B dan LULUS';
  } elseif ($nilai > 60 && $nilai <= 65) {
    echo 'GRADE C+ dan LULUS';
  } elseif ($nilai > 55 && $nilai <= 60) {
    echo 'GRADE C dan TIDAK LULUS';
  } elseif ($nilai > 45 && $nilai <= 55) {
    echo 'GRADE D dan TIDAK LULUS';
  } elseif ($nilai <= 45) {
    echo 'GRADE E dan TIDAK LULUS';
  } else {
    echo 'Harap Masukkan nilai!';
  }
  echo '<hr>';

  // JAWABAN NO.2 LOOPING MENGGUNAKAN FOR
  echo '<h4>No.2</h4>';
  echo 'Membuat Perulangan Menggunakan For dari 1 sampai 10' . '<br>' . '<br>';

  for ($i = 1; $i <= 10; $i++) {
    echo 'Ini adalah nilai yang ke - ' . $i . '<br>';
  }
  echo '<hr>';

  // JAWABAN NO.3 LOOPING MENGGUNAKAN WHILE
  echo '<h4> No.3 </h4>';
  echo 'Membuat Perulangan Menggunakan For dari 10 sampai 20' . '<br>' . '<br>';

  $i = 10;
  while ($i <= 20) { // jadi peletakan echonya harus diawal, biar mencetak nilai 10 untuk nilai pertama.
    echo 'Ini adalah nilai yang ke - ' . $i . '<br>';
    $i++;
  }
  echo '<hr>';


  // echo'Cara 2' . '<br>';
  // $a=0;
  // $b= 9;
  // while ($a <= 9) {
  //   $a ++;
  //   $c= $a + $b ;
  //   echo 'Ini adalah nilai yang ke - '. $c .'<br>';
  // }
  // echo'<br>';

  // echo'cara 3' . '<br>';
  // $a=10;
  // $b= 1;
  // while ($a <= 20) {
  //   $a ++;
  //   $c= $a - $b ;
  //   echo 'Ini adalah nilai yang ke - '. $c .'<br>';
  // }
  // echo 'cara 3';
  // echo'<br>';

  // JAWABAN NO.4 LOOPING  MENGGUNAKAN DO WHILE
  echo '<h4> No.4 </h4>';
  echo 'Membuat Perulangan Menggunakan For dari 15 sampai 15' . '<br>' . '<br>';

  $i = 15;
  do {
    echo 'Ini adalah nilai yang ke - ' . $i . '<br>';
    $i++;
  } while ($i <= 25);

  echo '<hr>';

  //  JAWABAN NO.5 LOOPING BILANGAN GENAP DARI 1-100 
  echo '<h4> No.5</h4>';
  echo 'Angka Genap dari 1 - 100 : ' . '<br>' . '<br>';

  for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
      echo $i . ', ';
    }
  }

  echo '<hr>';

  // JAWABAN NO.6 BILANGAN GANJIL DARI 1-100
  echo '<h4> No.6 </h4>';
  echo 'Angka Genap dari 1 - 100 : ' . '<br>' . '<br>';

  for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 1) {
      echo $i . ', ';
    }
  }
  echo '<hr>';

  // JAWABAN NO.7 PERULANGAN TANDA # MENGGUNAKAN NESTED LOOP

  echo '<h4> No.7 </h4>';
  echo 'Perulangan tanda # mengerucut kebawah' . '<br>';

  for ($a = 5; $a >= 0; $a--) {
    echo '<br>';
    for ($b = $a; $b >= 0; $b--) {
      echo '#';
    }
  }
  echo '<hr>';

  // JAWABAN NO.8 SISTEM STOCK BAHAN SETIAP STORE

  echo '<h4> No.8 </h4>';
  echo '<h4>Sistem Pengiriman Stok Barang</h4>';

  $stok = 7; // dalam kilogram
  $minstok = 2; // Setiap toko harus memiliki minimal 2 kilogram tepung
  $jumlahtoko = 4; // Jumlah toko
  echo 'Jumlah Toko : ' . $jumlahtoko . '<br>';
  echo 'Jumlah Stok yang harus dikirim : ' . $minstok . '<br>' . '<br>';

  for ($i = 1; $i <= $jumlahtoko; $i++) { // Mengecek apakah stok tepung mencukupi untuk setiap toko menggunakan loop

    if ($stok < $minstok * $i) { // Memeriksa stok tepung untuk toko ke-$i
      echo "Toko ke-$i: Tepung kurang" . '<br>';
    } else {
      echo "Toko ke-$i: Stok tepung cukup" . '<br>';
    }
  }
  echo '<hr>';
  echo '<h1> DAMN!!! I FINISH THIS TASK BROOO 8) </h1>';
  ?>
</body>

</html>