<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../assets/img/1.1.png" />

  <title>PT. PLN </title>

  <link rel="icon" href="../assets/img/1.1.png" type="image/x-icon" />
  <link rel="stylesheet" href="show-hide.css">

  <!-- Bootstrap css -->
  <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style" />

  <!--- Icons css --->
  <link href="../assets/css/icons.css" rel="stylesheet">

  <!--- Style css --->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/plugins.css" rel="stylesheet">

  <!--- Animations css --->
  <link href="../assets/css/animate.css" rel="stylesheet">

  <script src="jquery.js"></script>

</head>

<body class="main-body bg-white login-img">
  <!-- Loader -->
  <!-- <div id="global-loader">
      <img
        src="../assets/img/loaders/loader-4.svg"
        class="loader-img"
        alt="Loader"
      />
    </div> -->
  <!-- /Loader -->


  <?php
  if (isset($_POST['username'])) {
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);

    $query  = mysqli_query($koneksi, "SELECT*FROM  user_1 where username='$username' and password='$password'");

    if (mysqli_num_rows($query) > 0) {
      $data = mysqli_fetch_array($query);
      $_SESSION['user_1'] = $data;
      echo '<script>alert("Selamat datang, ' . $data['nama'] . '");
                location.href="index.php";</script>';
    } else {
      echo '<script>alert("username/password tidak sesuai.");</script>';
    }
  }
  ?>

  <div class="page">
    <!-- main-signin-wrapper -->
    <div class="my-auto">
      <!-- <img src="../assets/img/2.2.png" style="height: 75px; width: 7rem;"> -->
      <div class="main-signin-wrapper">
        <div class="d-md-flex">
          <div class="h-50 w-75" style="margin-left: 4.5rem;">
            <div>
              <img src="../assets/img/2.1.png" class="m-0 mb-4" alt="logo" />
            </div>
          </div>
        </div>
        <div class="sign-up wd-md-75p justify-align-senter" style="margin-right: 4.5rem; ">
          <div class="main-signin-header lh-3">
            <div class="d-flex ">
              <span class="ht-50 wd-xs-60"> <img src="../assets/img/1.2.png"> </span>
              <div class="container">
                <h2 class=" mg-t-5 tx-normal">SELAMAT DATANG</h2>
                <h4>Di PLN Daftar Tunggu Pelanggan !</h4>
              </div>
            </div>
            <p>Login menggunakan username dan password yang sudah didaftarkan jika belum mempunyai akun silahkan hubungi !</p>
            <form method="post">
              <div class="form-group d-flex">

                <span class="mg-e-5 p-2 bd rounded-5 bg-gray-900 "><i class="fa fa-user tx-white"></i> </span>
                <input class="form-control rounded-10 mg-s-3 bd bd-primary" name="username" type="text" placeholder="Enter your name" />
              </div>
          </div>
          <div class="form-group d-flex">
            <span class="mg-e-5 p-2 bd rounded-5 bg-gray-900 "><i class="fa fa-lock tx-white"></i></span>

            <input id="password" class="form-control rounded-10 mg-s-3 bd bd-primary" name="password" placeholder="Enter your password" type="password" required>
            <span class="show-hide pos-absolute">
              <i class="fa fa-eye"></i>
            </span>
          </div>
          <input type="submit" class="btn btn-info btn-block" value="Login">
        </div>
      </div>
    </div>
    </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- page closed -->
  <!-- /main-signin-wrapper -->


  <!--- Back-to-top --->
  <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const passwordField = document.querySelector("#password");
      const showHideBtn = document.querySelector(".show-hide i");

      showHideBtn.addEventListener("click", function() {
        if (passwordField.type === "password") {
          passwordField.type = "text";
          showHideBtn.classList.add("hide");
        } else {
          passwordField.type = "password";
          showHideBtn.classList.remove("hide");
        }
      });
    });
  </script>
  <!--  Jquery js -->
  <script src="../assets/plugins/jquery/jquery.js"></script>

</body>

</html>