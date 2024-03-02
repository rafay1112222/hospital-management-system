<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="select * from role where r_id='$idd'";
$result=mysqli_query($con,$q);
$edit=mysqli_fetch_assoc($result);
if(isset($_POST['sub'])){
    $r=$_POST['Role'];
   
    $qq="Update role set user_role='$r' where r_id='$idd'";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('updated');</script>";
        echo "<script>window.location.href='showrole.php';</script>";
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
                            <h6 class="mb-4">Edit Role</h6>
                            <form action="" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" name="Role" class="form-control" id="floatingInput"
                                    placeholder="" value="<?php echo $edit['user_role'] ?>">
                                <label for="floatingInput">Role Name</label>
                            </div>
                           
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Edit</button>
                            </form>
                        </div>
                    </div>

                    
