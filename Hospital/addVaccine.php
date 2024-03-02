<?php
include ('header.php');
include ('sidebar.php');
if(isset($_POST['sub'])){
    $vn=$_POST['vacc'];
    $qq="INSERT INTO vaccination(V_Name)VALUES ('$vn')";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('inserted');</script>";
        echo "<script>window.location.href='showVaccine.php';</script>";
    }
   else{
    echo "<script>alert('error');</script>";
}
   }

?>
<!-- Form Start -->
<div class="page-wrapper">
        <div class="content">
        <div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Add Vaccine</h3>
</div>
</div>
                          
                            
                          <form action="" method="post">
                            <div class="form-floating mb-3">
                            <label for="floatingTextarea">Vaccine Name</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="vacc">
                              
                            </div>
                            
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                            </form>
                        </div>
                    </div>

