<?php
include("connection.php");



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


  <?php
  include('navbar.php')
  ?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/HOME.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hospitals</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Hospitals</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
  

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage text_align_center ">
          <center> <h1><b>Hospitals Associated</b></h1> </center>
          <center>  <p>These hospitals are not only catering to the healthcare needs of the city’s population but people from all over the country visit Karachi. <br> Karachi just like Lahore and Islamabad is capable of becoming a medical tourism hub. Here is all you need about the best healthcare service providers in Karachi.</p> </center>
          </div>
        </div>
      </div>
     



<div class="row">
    <?php
    $q = "select * from hospital where status=0";
    $res = mysqli_query($con, $q);

    while ($data = mysqli_fetch_assoc($res)) {
        ?>
        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
            <div class="card-doctor">
                <div class="header">
                    <figure><img style="height: 260px;width: 300px;" src="../ADMIN/<?php echo $data['h_img'] ?>"></figure>
                </div>
                <div class="body">
                    <center>
                        <h3><a href="hosinfo.php?id=<?php echo $data['H_id'] ?>"><?php echo $data['H_name'] ?></a></h3>
                    </center>
                    <center>
                        <p class="limited-details"><?php echo substr($data['Details'], 0, 100); ?>...</p>
                        
                        <!-- Button to redirect to hospinfo.php -->
                        <button class="btn btn-primary read-more-btn" data-hospital-id="<?php echo $data['H_id']; ?>">
                            Read More
                        </button>
                    </center>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script>
    // JavaScript to handle "Read More" button click
    document.querySelectorAll('.read-more-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            // Get the hospital ID from the data-hospital-id attribute
            var hospitalId = this.getAttribute('data-hospital-id');

            // Redirect to hospinfo.php with the hospital ID
            window.location.href = 'hosinfo.php?id=' + hospitalId;
        });
    });
</script>



</div>
</div>



    

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


  