<?php
// koneksi data
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pweb');
}

// Query 
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // if (mysqli_num_rows($result)) {
  //   //jika datanya satu
  //   $row = mysqli_fetch_assoc($result);
  //   return $row;
  // } else {
  //   //jika ada banyak
  //   $rows = [];
  //   while ($row = mysqli_fetch_assoc($result)) {
  //     $rows[] = $row;
  //   }
  //   return $rows;
  // }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{

  $nama    = $data['nama'];
  $nik     = $data['nik'];
  $jabatan = $data['jabatan'];
  $foto    = $data['foto'];

  $conn  = koneksi();
  $query = "INSERT INTO `pegawai` (`id`, `nik`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) 
                         VALUES (NULL, '$nik', '$nama', '$jabatan', '$foto', NULL, NULL)";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
