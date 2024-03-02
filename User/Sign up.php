
<?php
include('connection.php');
include('navbar.php');

    if(isset($_POST['sub'])){
        $u=$_POST['uname'];
        $e=$_POST['mail'];
        $p=$_POST['pass'];
        $add=$_POST['add'];
        $dob=$_POST['dob'];
  
        $qq="INSERT INTO `users`(`r_id`, `name`, `email`, `pass`, `address`, `dob`) VALUES(2,'$u','$e',
        '$p','$add','$dob')";
        $result=mysqli_query($con,$qq);
        if($result){
            echo "<script>alert('User Inserted');window.location.href='../User/Login.php'</script>";
        }
        else{
            echo mysqli_error($con);
        }
            }
        else{
            echo "<script>alert('There's something wrong');window.location.href='index.php'</script>";
        }
        
    
     
?>
  
  <!-- Back to top button -->
  <div class="back-to-top"></div>


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/HOME.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
          </ol>
        </nav>
         <h1 class="font-weight-normal">Sign Up</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <form class="main-form" method="POST" action="" enctype="multipart/form-data">
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Sign Up</h1>

      
        <div class="row mt-5 ">
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms"required>
            <input type="name" name="uname" id="floatingText" placeholder="Type Your Name" class="form-control"required>
            </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms"required>
            <input type="email" name="mail" id="floatingText" placeholder="Type Your Email " class="form-control"required>
            
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms"required>
            <input type="password" name="pass" placeholder="Type Your Password" class="form-control"required>
          </div>
           <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                           <input class="form-control" placeholder="Date Of Birth" type="date" name="dob"required>
                        </div>
                        <div class="col-12 col-sm-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                           <input class="form-control" placeholder="Address" rows="8" type="message" name="add"required>
                        </div>
        </div>

        
       <center> <button name="sub" type="submit" class="btn btn-primary mt-3 wow zoomIn">Sign Up</button></center>
    </div>
</div> 
 </form>
   
<br><br><br><br>
  
  <?php
include('footer.php')

?>

