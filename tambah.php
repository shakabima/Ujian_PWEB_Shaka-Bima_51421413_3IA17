<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crud</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">

      <form method="post" action="insertcode.php">
        <h2>Tambah Data Mahasiswa : </h2><hr>
        <table>
          <tr>
            <td>NPM &nbsp;</td>
            <td>:&nbsp;&nbsp;</td>
            <td><input type="text" name="npm" class="form-control"></td>
          </tr>

          <tr>
            <td>Nama &nbsp;</td>
            <td>:&nbsp;&nbsp;</td>
            <td><input type="text" name="nama" class="form-control"></td>
          </tr>

          <tr>
            <td>Kelas &nbsp;</td>
            <td>:&nbsp;&nbsp;</td>
            <td><input type="text" name="kelas" class="form-control"></td>
          </tr>

          <tr>
            <td>Email &nbsp;</td>
            <td>:&nbsp;&nbsp;</td>
            <td><input type="text" name="email" class="form-control"></td>
          </tr>

          <tr>
            <td>Jurusan &nbsp;</td>
            <td>:&nbsp;&nbsp;</td>
            <td><input type="text" name="jurusan" class="form-control"></td>
          </tr>
        </table>
        <br>
        <button type="submit" name="insertdata" class="btn btn-primary">Simpan</button>
      </form>
  </body>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
