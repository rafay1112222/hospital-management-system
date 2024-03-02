<?php
include ('header.php');
include('sidebar.php');
if(isset($_POST['sub'])){
    $u=$_POST['test'];
    
    $qq="INSERT INTO  test(Test_Name)VALUES ('$u')";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('inserted');</script>";
        echo "<script>window.location.href='showTest.php';</script>";
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
<h3 class="mb-0">Add Test</h3>
</div>
</div>
                  
<br>

    <br>
                            <h6 class="mb-4">Add Test</h6>


                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                                <form action="" method="post">
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="test">
                                <label for="floatingTextarea">Test Name</label>
                            </div>
     
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                            </form>
                        </div>
                    </div>
                            </div>

                    
