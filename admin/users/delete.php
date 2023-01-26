<?php 
  include '../../koneksi.php';
  $id = $_GET['id_user'];
  if(!isset($_GET['id_user'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'index.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_user WHERE id_user = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

?>

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
          <button class="btn-logout">Logout</button>
        </div>
        <div class="content">
          <h3>Hapus Users</h3>
          <div class="form-login">
              <h4>Ingin Menghapus Data ?</h4>
            <form
              action="users-proses.php"
              method="post"
            >
            <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">

              <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin-top: 50px;">
                Yes
              </button>
              <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%;">
                No
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>&copy; 2022 ParisWorldTour. All rights reserved.</p>
    </div>
  </body>
</html>
