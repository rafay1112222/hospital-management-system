<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="select * from patient where P_id='$idd'";
$result=mysqli_query($con,$q);
$edit=mysqli_fetch_assoc($result);
if(isset($_POST['sub'])){
    $n=$_POST['name'];
    $role=$_POST['user'];
    $blood=$_POST['blood'];
    $gen=$_POST['gen'];
    $qq="update patient set U_id='$role', Blood_G='$blood', Gender='$gen', Name='$n' where P_id='$idd'";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('updated');</script>";
        echo "<script>window.location.href='showPatient.php';</script>";
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
                            <h6 class="mb-4">Edit Patient</h6>
                            <form action="" method="post">
                            <div class="form-floating mb-3"> 
                                <label for="floatingTextarea">Patient Name</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="name" value="<?php echo $edit['Name']?>">
                               
                            </div>

<div class="form-floating mb-3">
<label for="floatingTextarea">Users</label>
  <select class="form-control" id="exampleFormControlInput1"
                                    aria-label="Floating label select example" name="user">

<?php
$q="select * from users where r_id=2 and status=0";
$res=mysqli_query($con,$q);
while($data=mysqli_fetch_assoc($res)){
?>
<option value="<?php echo $data['U_id']?>"
<?php
if($data['U_id']==$edit['U_id']){
    echo "selected";
}
?>

><?php echo $data['name']?></option>
<?php
}
?>
</select>

</div>

                            
                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                            <label for="floatingTextarea">Blood Group</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="blood" value="<?php echo $edit['Blood_G']?>">
                              
                            </div>

                            <div class="form-floating mb-3">
                            <label for="floatingTextarea">Gender</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="gen" value="<?php echo $edit['Gender']?>">
                               
                            </div>

     
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Edit</button>
                            </form>
                        </div>
                    </div>
                            </div>

