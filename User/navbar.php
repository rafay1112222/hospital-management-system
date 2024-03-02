<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>





  <header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.php"><span class="text-primary10">One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hospital.php">Hospitals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Vaccine.php">Vaccines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="test.php">Tests</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>

            <?php if (!isset($_SESSION['username'])) { ?>

              <li class="nav-item">
                <a class="nav-link" href="appointment.php?id">Appointments</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3  " href="login.php">Login</a>
              </li>

            <?php  } else { ?>

              <li class="nav-item">
                <a class="nav-link" href="book.php">Vaccine Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booktest.php">Test Appointment</a>
              </li>

              <li class="nav-item dropdown">
                <a class="btn btn-primary ml-lg-3  nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary   href=">
                  <b><?php echo  $_SESSION['username'] ?></b>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="logout.php">Log Out</a>


              </li>
            <?php } ?>
            </li>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
      </div>
    </nav>


  </header>



  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>