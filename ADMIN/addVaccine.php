<?php
include ('header.php');
include('sidebar.php');
if(isset($_POST['sub'])){
    $vn=$_POST['vacc'];
    $img = $_FILES['V_img'];
    $imgname = $_FILES['V_img']['name'];
    $img_tempname = $_FILES['V_img']['tmp_name'];
    $img_path = "img/" . $imgname;
    move_uploaded_file($img_tempname,$img_path);

    $qq="INSERT INTO vaccination(V_Name,V_img)VALUES ('$vn','$img_path')";
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
<body>
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
                  
<br>

    <br>
                            <h6 class="mb-4">Add Vaccine</h6>
                            
                          <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="vacc">
                                <label for="floatingTextarea">Vaccine Name</label>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">image</label>
                            <input type="file" class="form-control" name="V_img">
                        </div>
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                            </form>
                        </div>
                    </div>

                    
