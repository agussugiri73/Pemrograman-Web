<?php
// menghubungkan ke file function.php
require 'functions.php';

// ambil adata id dari url
$id = $_GET['id'];


//query
$query = "SELECT * FROM pegawai WHERE id = $id";
$pegawai = query($query);

// var_dump($pegawai[0]['nama']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pegawai</title>
</head>

<body>
  <h3>Detail Pegawai</h3>


  <ul>
    <li><img src="/../pemrograman-web/crud/img/<?= $pegawai[0]['foto']; ?>" width="250" </li> <li>Nama : <?= $pegawai[0]['nama']; ?></li>
    <li>NIK:<?= $pegawai[0]['nik']; ?></li>
    <li>Jabatan : <?= $pegawai[0]['jabatan']; ?></li>
    <li><a href="/../pemrograman-web/crud/edit.php">edit</a>|<a href="/../pemrograman-web/crud/delete.php/?id=<?= $pegawai[0]['id']; ?>">delete</a></li>
    <li><a href="/../pemrograman-web/crud/pegawai.php">Kembali ke Daftar Pegawai..</a></li>
  </ul>

</body>

</html>