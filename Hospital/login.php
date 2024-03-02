<?php
session_start();
$con = mysqli_connect("localhost","root","","bee");
if (!$con){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
    }
    if(isset($_POST['sub'])){
$email=$_POST['mail'];
$password=$_POST['pass'];
$qq="select * from users where email='$email' and pass='$password'";
$results=mysqli_query($con,$qq);
$a=mysqli_fetch_assoc($results);
$role=$a['r_id'];
$b=mysqli_num_rows($results);
if($b==0){
    echo"<script>alert('login failed'); window.location.href='login.php';</script>";
}
else if($role==1){
$_SESSION['email']=$email;
$_SESSION['id']=$a['U_id'];
$_SESSION['username']=$a['name'];
echo"<script>alert('admin'); window.location.href='../ADMIN/index.php';</script>";
}
else if($role==2){
    
    echo"<script>alert('You are not an admin'); window.location.href='login.php';</script>";
    }
    else if($role==3){
        $_SESSION['email']=$email;
        $_SESSION['id']=$a['U_id'];
        $_SESSION['hosname']=$a['name'];
        echo"<script>alert('hospital'); window.location.href='../Hospital/index.php';</script>";
        }
}

?>
 

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="" method="post" class="form-signin">
						<div class="account-logo">
                            <a href=""><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="mail" class="form-control" id="floatingInput" placeholder="Type Your Email.com">
                        
                        </div>
                        <br>
                        <br>
                        <div class="form-floating mb-4">
                            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                           
                        </div>
                       
                        
                        
                        <button type="submit" name="sub" class="btn btn-primary py-3 w-100 mb-4">Log in</button>
                        </div>
                        
                    </form>
                </div>
			</div>
        </div>
    </div>
   
</body>



</html>









