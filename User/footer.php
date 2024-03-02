<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
<div class="back-to-top"></div>
<footer class="page-footer">
    <div class="container"> 
    
          
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
        <ul class="footer-menu">
        <h5><a class="navbar-brand" href="index.php"><span class="text-primary1 " style= "font-size: 35px">One-Health</a></span></h5>
            <li><a href="hospital.php">Hospitals  </a></li>
            <li><a href="vaccine.php">Vaccine</a></li>
            <li><a href="test.php">Test</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="terms&co.php">Terms & Condition</a></li>

          </ul>
        </div>
      


        <div class="col-md-6 col-lg-3 py-3">
          <br>
    <h5>Our Hospitals</h5>
    <ul class="footer-menu">
        <?php
        $q = "select * from hospital where status=0";
        $res = mysqli_query($con, $q);
        $count = 0; // Initialize item count

        while ($data = mysqli_fetch_assoc($res)) {
            // Display 6 items per column
            if ($count % 5 == 0 && $count != 0) {
                echo '</ul></div><div class="col-md-6 col-lg-3 py-3"><br><h5></h5><ul class="footer-menu">';
            }
            ?>
            <li><a href="hosinfo.php?id=<?php echo $data['H_id'] ?>"><?php echo $data['H_name'] ?></a></li>
            <?php
            $count++;
        }
        ?>
    </ul>
</div>
<div class="col-sm-6 col-lg-3 py-3">
  <br>
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">0319-3276826</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>
</div>
      </div>
<hr>
      <div class="row">
      <div class="col-lg-9">
      <p id="copyright">Copyright &copy; 2023 <a href="index.php" target="_blank">One-Health</a>. All right reserved</p>
      </div>
<div class="col-lg-3">

          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
</div>
      
    </div>
    
    </div>
    </div>
  </footer>
  

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</body>
</html>