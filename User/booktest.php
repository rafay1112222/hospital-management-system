<?php


// ... rest of your PHP code ...

include('connection.php');

if(isset($_POST['sub'])){
    $P=$_POST['PName'];
    $H=$_POST['HName'];
    $T=$_POST['TName'];
    $d=$_POST['date'];
    $t=$_POST['time'];
    $c=$_POST['contact'];
    $qq="INSERT INTO `appoinments`(`T_id`, `H_id`, `P_id`, `Date`, `Time`, `contact`, `Statuss`) VALUES
    ('$T','$H','$P','$d','$t','$c','pending')";
    $res=mysqli_query($con,$qq);
    if($res){
       echo "<script>alert('Your appointment is booked');</script>";
       echo "<script>window.location.href='booktest.php';</script>";
    }
    }



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



  <head>
    <!-- ... other head elements ... -->

    <script>
        // Function to validate selected date
        function validateDate() {
            var selectedDate = document.getElementsByName("date")[0].value;
            var currentDate = new Date().toISOString().split('T')[0];

            if (selectedDate < currentDate) {
                alert("Selected date cannot be a previous date.");
                return false;
            }
            return true;
        }
    </script>
</head>

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
            <li class="breadcrumb-item active" aria-current="page">Test Appointments</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Test Appoinments</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
 
 
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" method="POST" action="" enctype="multipart/form-data" onsubmit="return validateDate()">
       <!-- ... other form elements ... -->
<div class="col-12 col-sm-6 py-2 wow fadeInLeft">
    <select type="text" name="PName" class="form-control" placeholder="Patient Name." required>
        <?php
        $q = "SELECT * FROM users WHERE r_id=2 AND status=0";
        $res = mysqli_query($con, $q);
        while ($dataa = mysqli_fetch_assoc($res)) {
            ?>
            <option value="<?php echo $dataa['U_id'] ?>"
                <?php
                // Check if the current user is logged in and set selected attribute
                if ($dataa['U_id'] == $_SESSION['id']) {
                    echo "selected";
                }
                ?>
            ><?php echo $dataa['name'] ?></option>
            <?php
        }
        ?>
    </select>
</div>
<!-- ... other form elements ... -->

      
      
      
      
      
      
      
      
      <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <select type="text" name="PName" class="form-control" placeholder="Patient Name." required>
            <?php
                  $q="select * from users where r_id=2  and status=0";
                  $res=mysqli_query($con,$q);
                  while($dataa=mysqli_fetch_assoc($res)){
                  ?>
                  <option value="<?php echo $dataa['U_id']?>"
                  <?php
                  if($dataa['U_id']==$_SESSION['id']){
                     echo "selected";
                  }
                  ?>
                  ><?php echo $dataa['name']?></option>

                  <?php
                  }
                  ?>
            </select>
          </div>




  <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms"required>
            <select name="HName" id="exampleFormControlInput1" class="custom-select">
            <?php
               
                 $q="select * from hospital where status=0";
                 $res=mysqli_query($con,$q);
                 while($data=mysqli_fetch_assoc($res)){
                 ?>
                 <option value="<?php echo $data['H_id']?>"><?php echo $data['H_name']?></option>

                 <?php
                 }
                 ?>
                  </select>
         
        
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms"required>
            <select name="TName" id="exampleFormControlInput1" class="custom-select">
            <?php
                  $q="select * from test where status=0";
                  $res=mysqli_query($con,$q);
                  while($data=mysqli_fetch_assoc($res)){
                  ?>
                  <option value="<?php echo $data['T_id']?>"><?php echo $data['Test_Name']?></option>

                  <?php
                  }
                  ?>
            </select>
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" required>
        <input type="date" name="date" class="form-control">
    </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms"required>
            <input type="time" name="time" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="text" name="contact" class="form-control" placeholder="Contact Number.."required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.." required></textarea>
          </div>
        </div>

       
        <center>
        <button name="sub" type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
    </center>
</form>
 
                </div>
                <br><br><br><br>
 <br><br><br>

 <?php
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
?>

<div class="cases">
         <div class="container-fluid">
            <div class="row">
 <div class="col-md-12">
               <div class="titlepage text_align_center ">
                    <center> <h2>Your Test appoinments</h2></center>
                     
                  </div>
<table class="table">
  <thead class="table-dark">

  <th>id</th>
  <th>Hospital Name</th>
  <th>Patient Name</th>
  <th>Test Name</th>
  <th>Status</th>
  <th>Date</th>
  <th>Time</th>

  </thead>
  <tbody>
    <?php
     $q="select * from appoinments join users on appoinments.P_id=users.U_id join test
      on test.T_id=appoinments.T_id join hospital on hospital.H_id=appoinments.H_id 
      where users.U_id='$id'";
     $res=mysqli_query($con,$q);
     while($data=mysqli_fetch_assoc($res)){
    ?>
    <tr>
<td><?php echo $data['A_id']?></td>
<td><?php echo $data['H_name']?></td>
<td><?php echo $data['name']?></td>
<td><?php echo $data['Test_Name']?></td>
<td><?php echo $data['Statuss']?></td>
<td><?php echo $data['Date']?></td>
<td><?php echo $data['Time']?></td>

</tr>
<?php
     }
?>
  </tbody>
</table>
</div>

</div></div></div>
<br>
<?php
}
else{
  ?>
<div class="titlepage text_align_center ">
                    <center> <h2>No Appoinments booked</h2>  </center>
                     
                  </div>
  <?php
}
?>



         
      </div> <!-- .container -->
  </div> <!-- .page-section -->
  <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
      <?php
include('footer.php')

?>

</body>