<?php
require 'functions.php';
//apakah tombol tambah sudah di tekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "Data Berhasil ditambahkan";
  } else {
    echo 'Data Gagal ditambahkan';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pegawai</title>
</head>

<body>
  <h3>FORM TANBAH DATA PEGAWAI</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          NAMA :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NIK :
          <input type="text" name="nik" required>
        </label>
      </li>
      <li>
        <label>
          JABATAN :
          <input type="text" name="jabatan" required>
        </label>
      </li>
      <li>
        <label>
          FOTO :
          <input type="text" name="foto" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>