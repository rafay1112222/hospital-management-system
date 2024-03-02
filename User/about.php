<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async
    defer></script>

  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
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
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Chat</span> with a doctors</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>One</span>-Health Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>One</span>-Health Pharmacy</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
          <div class="text-lg">
            <p>
            <p class="text-grey mb-4">One Health is an approach that recognizes that the health of people is closely
              connected to the health and our shared environment. One Health is not new, but it has become more
              important in recent years. The earth has experienced changes in climate and land use, such as
              deforestation and intensive farming practices. Disruptions in environmental conditions and habitats !</p>
            </p>
            <p class="text-grey mb-4">One Health is gaining recognition in the United States and globally as an
              effective way to fight health issues at the human Successful public health interventions require the
              cooperation of human, Professionals in human health (doctors, nurses, public health practitioners,
              epidemiologists)</p>
          </div>
        </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_1.jpg" alt="">

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
                  <img src="../assets/img/doctors/doctor_2.jpg" alt="">

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
                  <img src="../assets/img/doctors/doctor_3.jpg" alt="">

                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>



  </div>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d829284.8845233936!2d66.936216!3d25.175571!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e1!3m2!1sen!2sus!4v1700774211297!5m2!1sen!2sus"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
  <br>
  <?php
  include('footer.php')

    ?>

<script>
    // Initialize and add the map
    function initMap() {
      // The location of Apetech Nazimabad, Karachi
      var apetechLocation = { lat: 24.9172, lng: 67.0414 };

      // The map, centered at Apetech Nazimabad
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15, // Adjust the zoom level as needed
        center: apetechLocation
      });

      // The marker, positioned at Apetech Nazimabad
      var marker = new google.maps.Marker({
        position: apetechLocation,
        map: map,
        title: 'Apetech Nazimabad, Karachi'
      });
    }
  </script>



  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>



  <script src="../assets/js/theme.js"></script>


</body>

</html>







  

