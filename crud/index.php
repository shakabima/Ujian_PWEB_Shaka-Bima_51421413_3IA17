<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crud</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">
      <br>
      <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
      <br><br>
      <?php
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection, 'db_crud');

          $query = "SELECT * FROM tbl_mahasiswa";
          $query_run = mysqli_query($connection, $query);
      ?>

      <table class="table table-hover">
        <thead>
          <th>NPM</th>
          <th>NAMA</th>
          <th>KELAS</th>
          <th>EMAIL</th>
          <th>JURUSAN</th>
          <th>EDIT </th>
          <th>DELETE </th>
        </thead>
        <tbody>

          <?php
              if($query_run)
              {
                  foreach ($query_run as $row )
                  {
          ?>

          <tr>
              <td><?php echo $row['npm']; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['kelas']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['jurusan']; ?></td>
              <td>
              <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-warning">UPDATE</a>
                    </td>
                    <td>
                        <a href="hapus.php?id=<?= $row['id']; ?>"
                           onclick="return confirm('Yakin?');" class="btn btn-danger">HAPUS</a>
              </td>
          </tr>

          <?php
                  }
              }
              else
              {
                  echo "No Record Found";
              }
          ?>

        </tbody>
      </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
