<?php
include ('header.php');
include('sidebar.php');
if(isset($_POST['sub'])){
    $r=$_POST['Role'];
   
    $qq="INSERT INTO role(user_role) VALUES ('$r')";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('inserted');</script>";
        echo "<script>window.location.href='showrole.php';</script>";
    }
   else{
    echo "<script>alert('error');</script>";
}
   }

?>

<!-- Form Start -->
<body>
<div class="page-wrapper">
<div class="content">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Add Role</h3>
</div>
</div>
                  
<br>

    <br>
                            <form action="" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" name="Role" class="form-control" id="floatingInput"
                                    placeholder="">
                                <label for="floatingInput">Role Name</label>
                            </div>
                           
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                            </form>
                        </div>
                    </div>

