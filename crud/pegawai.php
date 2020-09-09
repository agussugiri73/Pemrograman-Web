<?php
// menghubungkan dengan funntionts file
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");
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
      <th>NIK</th>
      <th>NAMA</th>
      <th>JABATAN</th>
      <TH>AKSI</TH>
    </tr>

    <?php $i = 1;

    foreach ($pegawai as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $p['foto']; ?>" alt="" width="70"></td>
        <td><?= $p['nik']; ?></td>
        <td><?= $p['nama']; ?></td>
        <td><?= $p['jabatan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>