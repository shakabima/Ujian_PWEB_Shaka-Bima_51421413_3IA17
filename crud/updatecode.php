<?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'db_crud');

  if(isset($_POST['submit']))
  {
      $id = $_POST['id'];

      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $email = $_POST['email'];
      $jurusan = $_POST['jurusan'];

      $query = "UPDATE tbl_mahasiswa SET npm='$npm', nama='$nama', alamat='$kelas', email='$email', jurusan='$jurusan' WHERE id='$id'";
      $query_run = mysqli_query($connection, $query);

      if($query_run)
      {
          echo '<script> alert("Data Updated"); </script>';
          header('Location:index.php');
      }
      else
      {
          echo '<script> alert("Data Not Updated"); </script>';
      }
  }

?>
