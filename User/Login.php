<?php
include('connection.php');
include('navbar.php');

if (isset($_POST['sub'])) {
  $u = $_POST['uname'];
  $e = $_POST['mail'];
  $p = $_POST['pass'];
  $add = $_POST['add'];
  $dob = $_POST['dob'];

  $qq = "INSERT INTO `users`(`r_id`, `name`, `email`, `pass`, `address`, `dob`) VALUES(2,'$u','$e',
        '$p','$add','$dob')";
  $result = mysqli_query($con, $qq);
  if ($result) {
      echo "<script>alert('Successfully Loged In');window.location.href='../User/index.php'</script>";
    } else {
    echo mysqli_error($con);
  }
} 



?>
<?php

if (isset($_POST['sub'])) {
  $email = $_POST['mail'];
  $password = $_POST['pass'];
  $qq = "select * from users where email='$email' and pass='$password'";
  $results = mysqli_query($con, $qq);
  $a = mysqli_fetch_assoc($results);
  $role = $a['r_id'];
  $b = mysqli_num_rows($results);
  if ($b == 0) {
    echo "<script>alert('login failed'); window.location.href='login.php';</script>";
  } else if ($role == 2) {
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $a['U_id'];
    $_SESSION['username'] = $a['name'];
    echo "<script>alert('Successfully Loged In'); window.location.href='../User/index.php';</script>";
  }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One-Health</title>
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

  <style>
    @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400");
    @import url("https://fonts.googleapis.com/css?family=Playfair+Display");

   

    .message,
    .form,
    form {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }


    .container1 {
      padding: 20px;
      height: 400px;
      background: #fff;
      position: relative;
      display: grid;
      grid-template: 100% / 50% 50%;
      box-shadow: 2px 2px 10px 0 rgba(#333, 0.2);
    }

    .message {
      position: absolute;
      background: white;
      width: 50%;
      height: 100%;
      transition: 0.5s all ease;
      transform: translateX(100%);
      z-index: 4;

      &:before {
        position: absolute;
        content: "";
        width: 1px;
        height: 70%;
        background: #fff;
        opacity: 0;
        left: 0;
        top: 15%;
      }

      .button {
        margin: 5px 0;
      }
    }

    .signup {
      &:before {
        opacity: 0.3;
        left: 0;
      }
    }

    .login {
      &:before {
        opacity: 0.3;
        left: 100%;
      }
    }

    .btn-wrapper {
      width: 60%;
    }

    


    .button {
      width: 100%;
      height: 40px;
      border: 0;
      outline: 0;
      color: white;
      font-size: 15px;
      font-weight: 800px;
      position: relative;
      z-index: 3;
      background: #129D72;
      font-family: sans-serif;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="back-to-top"></div>


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/HOME.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Login</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  <br>
  <br>
  <div class="container-fluid">
  <div class="container1">

    <div class="message signup">
      <div class="btn-wrapper">
        <button class="button" id="login"> Login</button>
        <button class="button" id="signup">Sign Up</button>
        
      </div>
    </div>
    <div class="form form--signup">
      <form action="" method="post" class="form-signin">
        <div class="page-section">
          <div class="container">
            <h1 class="text-center wow fadeInUp"> <b>Login</b></h1>


            <div class="row mt-5 d-flex justify-content-center">

              <div class="col-12 col-sm-12 py- wow fadeInUp" data-wow-delay="300ms" required>
                <input type="email" name="mail" id="floatingText" placeholder="Type Your Email" class="form-control" required>
              </div>
            </div>
            <div class="row mt-5 d-flex justify-content-center">

              <div class="col-12 col-sm-12 py-1wow fadeInDown" data-wow-delay="300ms" required>
                <input type="password" name="pass" id="floatingText" placeholder="Password" class="form-control" required>
              </div>
            </div>
            <br>
            <center>
              <div class="col-md-12 section text-secondary  wow fadeInUp">


                <a href="Sign up.php" aria-label="Create a Microsoft account" data-bind="text: config.text.createAccount,
                                attr: {'aria-label': config.text.createAccountAria}, click: msAccountSignUp">Not a Member ? Be the one !</a>

              </div>
              <button type="submit" name="sub" class="btn btn-primary mt-3 wow zoomIn">Log in</button>
            </center>

          </div>
        </div>
      </form>
    </div>
    <div class="form form--login">

      <form class="main-form" method="POST" action="" enctype="multipart/form-data">
        <div class="page-section">
          <div class="container">
            <h1 class="text-center wow fadeInUp"><b>Sign Up</b></h1>


            <div class="row mt-5 ">

              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms" required>
                <input type="name" name="uname" id="floatingText" placeholder="Type Your Name" class="form-control" required>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" required>
                <input type="email" name="mail" id="floatingText" placeholder="Type Your Email " class="form-control" required>

              </div>

              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms" required>
                <input type="password" name="pass" placeholder="Type Your Password" class="form-control" required>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                <input class="form-control" placeholder="Date Of Birth" type="date" name="dob" required>
              </div>
              <div class="col-12 col-sm-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <input class="form-control" placeholder="Address" rows="8" type="message" name="add" required>
              </div>
            </div>


            <center> <button name="sub" type="submit" class="btn btn-primary mt-3 wow zoomIn">Sign Up</button></center>
          </div>
        </div>
      </form>
    </div>
  </div><br>
  <br>
  <script>
  $("#signup").click(function() {
      $(".message").css("transform", "translateX(0)");
      if ($(".message").hasClass("login")) {
        $(".message").removeClass("signup");
      }
      $(".message").addClass("login");
    });
    $("#login").click(function() {
      $(".message").css("transform", "translateX(100%)");
      if ($(".message").hasClass("login")) {
        $(".message").removeClass("login");
      }
      $(".message").addClass("signup");
    });

    
  </script></div>


 
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>


<?php
include('footer.php');
?>