


<?php
include('connection.php');
include('navbar.php');


if(isset($_POST['sub'])){
    $P=$_POST['PName'];
    $H=$_POST['HName'];
    $V=$_POST['VName'];
    $d=$_POST['date'];
    $t=$_POST['time'];
    $c=$_POST['contact'];
    $qq="INSERT INTO `appoinment`(`V_id`, `H_id`, `P_id`, `Date`, `Time`, `contact`,`Statuss`) VALUES
    ('$V','$H','$P','$d','$t','$c','pending')";
    $res=mysqli_query($con,$qq);
    if($res){
       echo "<script>alert('Your appointment is booked');</script>";
       echo "<script>window.location.href='book.php';</script>";
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

    <title>One Health - Medical Center </title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/HOME.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vaccine Appointments</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Vaccine Appoinments</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
            <form class="main-form" method="POST" action="" enctype="multipart/form-data">

                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <select name="PName" type="text" class="form-control" placeholder="Patient Name." required>
                            <?php
                  $q="select * from users where r_id=2 and status=0";
                  $res=mysqli_query($con,$q);
                  while($dataa=mysqli_fetch_assoc($res)){
                  ?>
                            <option value="<?php echo $dataa['U_id']?>" <?php
                  if($dataa['U_id']==$_SESSION['id']){
                     echo "selected";
                  }
                  ?>><?php echo $dataa['name']?></option>

                            <?php
                  }
                  ?>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" required>
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
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms" required>
                        <select name="VName" id="exampleFormControlInput1" class="custom-select">
                            <?php
                  $q="select * from vaccination where status=0";
                  $res=mysqli_query($con,$q);
                  while($data=mysqli_fetch_assoc($res)){
                  ?>
                            <option value="<?php echo $data['V_id']?>"><?php echo $data['V_name']?></option>

                            <?php
                  }
                  ?>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" required>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input class="form-control" placeholder="Time" type="time" name="time" required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <input class="form-control" placeholder="Contact Number" type="number" name="contact" required>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."
                            required></textarea>
                    </div>


                </div>

        
       <center> <button name="sub" type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button></center>
      </form>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  
  <?php
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
?>
<br><br><br><br>

<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
               <div class="titlepage text_align_center ">
                    <center> <h2>Your Vaccination appoinments</h2></center>
                     
                  </div>
<table class="table">
  <thead class="table-dark">

  <th>id</th>
  <th>Hospital Name</th>
  <th>Patient Name</th>
  <th>Vaccination Name</th>
  <th>Status</th>
 <th>Date</th>
  <th>Time</th>

  </thead>
  <tbody>
    <?php
     $q="select * from appoinment join users on appoinment.P_id=users.U_id join vaccination
      on vaccination.V_id=appoinment.V_id join hospital on hospital.H_id=appoinment.H_id 
      where users.U_id='$id'";
     $res=mysqli_query($con,$q);
     while($data=mysqli_fetch_assoc($res)){
    ?>
    <tr>
<td><?php echo $data['A_id']?></td>
<td><?php echo $data['H_name']?></td>
<td><?php echo $data['name']?></td>
<td><?php echo $data['V_name']?></td>
<td><?php echo $data['Statuss']?></td>
<td><?php echo $data['Date']?></td>
<td><?php echo $data['Time']?></td>

</tr>
<?php
     }
?>
  </tbody>
</table>
<br><br><br><br>
</div>



</div></div></div>
<br><br><br><br>
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
         
            </form>
        </div> <!-- .container -->
    </div> <!-- .page-section -->
 
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>


    <?php
include('footer.php');
  
  
  ?>
</body>

</html>