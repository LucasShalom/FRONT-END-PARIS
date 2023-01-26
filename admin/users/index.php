<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ParisWorldTour - TOUR</title>
    <link rel="stylesheet" href="../../css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <div class="container">
      <div class="sidebar">
        <a href="/2018033.html/admin" class="active">Home</a>
        <a href="/2018033.html/admin/users">Users</a>
      </div>

      <div class="right_content">
        <div class="navbar">
          <img src="../../images/PARISLOGO.png" alt="ParisWorldTour Logo" />
          <button class="btn-logout">
            <a href="../../LOGIN-PAGE.html">Logout</a>
          </button>
        </div>
        <div class="content">
          <h3>Biodata User</h3>
          <button type="button" class="btn btn-tambah">
            <a href="create.php">Tambah Data</a>
          </button>
          <button type="button" class="btn">
          <a href="users-cetak.php">Cetak</a>
          </button>
          <table class="table-data">
            <thead>
              <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                include '../../koneksi.php';
                $sql = "SELECT * FROM tb_user";
                $result = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr>
                    <td>$data[Username]</td>
                    <td>$data[Email]</td>
                    <td>$data[Password]</td>
                    <td><a href=edit.php?id_user=$data[id_user]>Edit</a> | 
                    <a href=delete.php?id_user=$data[id_user]>Hapus</a></td>
                  </tr>
                  ";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>&copy; 2022 ParisWorldTour. All rights reserved.</p>
    </div>
  </body>
</html>
