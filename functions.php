<?php

$conn = mysqli_connect("localhost","root","","db_crud");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
  }
  return $rows;
}

function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM tbl_mahasiswa WHERE id='$id'");
  return mysqli_affected_rows($conn);
}

function ubah($data) {
  global $conn;

  $id = $data["id"];
  $npm = htmlspecialchars($data["npm"]);
  $nama = htmlspecialchars($data["nama"]);
  $kelas = htmlspecialchars($data["kelas"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);

  $query = "UPDATE tbl_mahasiswa SET
              npm='$npm',
              nama='$nama',
              kelas='$kelas',
              email='$email',
              jurusan='$jurusan'
            WHERE id='$id'";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

?>
