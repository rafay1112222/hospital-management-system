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

  <title>One Health - Medical Center</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
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
<br><br><br><br>
<?php
$id=$_GET['id'];
$q="select * from hospital where H_id='$id'";
$res = mysqli_query($con, $q);
while ($data = mysqli_fetch_assoc($res)) {
?>

<div class="container-fluid">
<div class="card mb-3" style="max-width: 100%;">

    <div class="row g-0">

        <div class="col-md-6">
    <img style="height: 500px;width: 550px;" src="../ADMIN/<?php echo $data['h_img'] ?>" alt="">
    </div>
    <div class="col-md-4">
   <br>         
<center><h1><?php echo $data['H_name'] ?></h1></center>

<p>
<?php echo $data['Details'] ?></p>

</p>
<p>
<h3 class="">Contact No</h3>
<?php echo $data['Contact'] ?></p>
<p>
<h3 class="">Location</h3>

<?php echo $data['location']?></p>
</p>
</div>
        </div>
    </div>
</div>


<br>




<?php
}
?>


<?php
include('footer.php');

?>
 
 <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>




</body>
</html>