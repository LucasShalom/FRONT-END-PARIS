<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ParisWorldTour | Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css" />
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
          <img src="../images/PARISLOGO.png" alt="ParisWorldTour Logo" />
          <button class="btn-logout">
            <a href="../LOGIN-PAGE.html">Logout</a>
          </button>
        </div>
        <div class="content-dashboard">
          <h2 id="text">
          <?php 
            session_start();
            echo $_SESSION['nama'];
          ?>
          </h2>
          <h3 id="date"></h3>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>&copy; 2022 ParisWorldTour. All rights reserved.</p>
    </div>
    <script>
    function myFunction() {
      const months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
      ];
      const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

      let date = new Date();

      jam = date.getHours();
      tanggal = date.getDate();
      hari = days[date.getDay()];
      bulan = months[date.getMonth()];
      tahun = date.getFullYear();


      let m = date.getMinutes();
      let s = date.getSeconds();
      m = checkTime(m);
      s = checkTime(s);

      document.getElementById(
        "date"
      ).innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
      setTimeout(myFunction, 1000);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }

    window.onload = function () {
      let date = new Date();

      jam = date.getHours();
      if (jam >= 4 && jam <= 10) {
        document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi,");
      } else if (jam >= 11 && jam <= 14) {
        document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang,");
      } else if (jam >= 15 && jam <= 18) {
        document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore,");
      } else {
        document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam,");
      }
      myFunction();
    };
    </script>
  </body>
</html>
