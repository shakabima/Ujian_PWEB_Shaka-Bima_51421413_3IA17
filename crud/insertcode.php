<?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'db_crud');

  if(isset($_POST['insertdata']))
  {
      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $email = $_POST['email'];
      $jurusan = $_POST['jurusan'];

      $query = "INSERT INTO tbl_mahasiswa (`npm`, `nama`, `kelas`, `email`, `jurusan`)
        VALUES ('$npm','$nama','$kelas','$email','$jurusan')";
      $query_run = mysqli_query($connection, $query);

      if($query_run)
      {
          echo '<script> alert("Data Saved"); </script>';
          header('Location:index.php');
      }
      else
      {
          echo '<script> alert("Data Not Saved"); </script>';
      }
  }

?>
