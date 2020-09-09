<?php
// Menghubungkan database dan pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pweb');

// Query isi tabel pegawai
$result = mysqli_query($conn, "SELECT * FROM pegawai");


// ** ubah data ke dalam array :
// ** 1. dengan fetch_row
//       $row = mysqli_fetch_row($result);
// ** 2. dengan fetch_assoc
//       $row = mysqli_fetch_assoc($result);
// ** 3. dengan fetch_array (keduanya)
//       $row = mysqli_fetch_array($result);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// Tampung ke dalam variabel pegawai
$pegawai = $rows;
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