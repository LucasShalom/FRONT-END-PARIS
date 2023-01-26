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
          <h3>Input Users</h3>
          <div class="form-tambah">
            <form action="users-proses.php" method="POST">
              <label for="nama">Nama</label>
              <input
                class="input"
                type="text"
                name="Username"
                id="Username"
                placeholder="Username"
              />

              <label for="Email">Email</label>
              <input
                class="input"
                type="text"
                name="Email"
                id="Email"
                placeholder="Email"
              />

              <label for="Password">Password</label>
              <input
                class="input"
                type="text"
                name="Password"
                id="Password"
                placeholder="Password"
              />

              <button type="submit" class="btn btn-simpan" name="simpan">
                Simpan
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
