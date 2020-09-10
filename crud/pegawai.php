<?php
// menghubungkan dengan funntionts file
require 'functions.php';
$query = "SELECT * FROM pegawai";
$pegawai = query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai</title>
</head>

<body>
  <h3>Daftar Pegawai</h3>
  <table border="1" cellpadding="20" cellspacing="0">
    <tr>
      <th>#</th>
      <th>FOTO</th>
      <!-- <th>NIK</th> -->
      <th>NAMA</th>
      <!-- <th>JABATAN</th> -->
      <TH>AKSI</TH>
    </tr>

    <?php $i = 1;

    foreach ($pegawai as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $p['foto']; ?>" alt="" width="70"></td>
        <td><?= $p['nama']; ?></td>
        <td>
          <!-- <a href="">ubah</a> | <a href="">hapus</a> -->
          <a href="/../pemrograman-web/crud/detail.php/?id=<?= $p['id']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>