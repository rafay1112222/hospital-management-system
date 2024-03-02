<?php
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center e</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php
include('navbar.php')
  ?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/HOME.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vaccine</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Vaccines</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  <div class="page-section bg-light">
    <div class="container">
      
      <div class="row justify-content-center">
      <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Vaccine Specilist</h1>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/vacc-sep1.jpg" alt="">
                
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Stein Albert</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/vacc-sep2.jpg" alt="">
                
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/vacc-sep3.jpg" alt="">
                
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-10">
 <br>
        <h1 class="text-center mb-5 wow fadeInUp">Our Vaccines</h1>
       
          <div class="row">
          <?php
                  $q="select * from vaccination join 
                  vaccine_available on vaccine_available.V_idd=vaccination.V_id where status=0";
                  $res=mysqli_query($con,$q);
                  while($data=mysqli_fetch_assoc($res)){
                  ?>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img  style="height: 260px;width: 300px;"  src="../ADMIN/<?php echo $data['V_img']?>" alt="">
                 
                </div>
                <div class="body" >
               <center> <p><b><?php echo $data['V_name']?></b></p></center>
               <br><br><br><br>
               <center><b><p><?php echo $data['Statuss']?></p></b></center>
                </div>
              </div>
            </div>
            <?php
                  }
               ?>
           
          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->



  <?php
include('footer.php')

?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>