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
