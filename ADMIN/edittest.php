<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="select * from test where T_id='$idd'";
$result=mysqli_query($con,$q);
$edit=mysqli_fetch_assoc($result);
if(isset($_POST['sub'])){
    $u=$_POST['test'];
    
    $qq="Update test set Test_Name='$u' where T_id='$idd'";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('updated');</script>";
        echo "<script>window.location.href='showTest.php';</script>";
    }
   else{
    echo "<script>alert('error');</script>";
}
   }

?>

<!-- Form Start -->
<div class="page-wrapper">
<div class="content">
<div class="col-12">
<div class="QA_table mb_30">
                                <table class="table lms_table_active">
                            <h6 class="mb-4">Edit Test</h6>


                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                                <form action="" method="post">
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="test" value="<?php echo $edit['Test_Name']?>">
                                <label for="floatingTextarea">Test Name</label>
                            </div>
     
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Edit</button>
                            </form>
                        </div>
                    </div>
                            </div>

                    
