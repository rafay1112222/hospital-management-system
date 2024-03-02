<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="select * from users where U_id='$idd'";
$result=mysqli_query($con,$q);
$edit=mysqli_fetch_assoc($result);
if(isset($_POST['sub'])){
    $u=$_POST['User'];
    $e=$_POST['mail'];
    $p=$_POST['pass'];
    $add=$_POST['add'];
    $dob=$_POST['con'];
    $role=$_POST['role'];
    $qq="Update users set r_id='$role', name='$u', email='$e', pass='$p', address='$add', dob='$dob' where U_id='$idd'"; 
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('updated');</script>";
        echo "<script>window.location.href='showUser.php';</script>";
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
                            <h6 class="mb-4">Edit User</h6>
                            <form action="" method="post">
                            <div class="form-floating mb-3">
                            <label for="floatingInput">User Name</label>
                                <input type="text" name="User" class="form-control" id="floatingInput"
                                    placeholder="" value="<?php echo $edit['name']?>">
                               
                            </div>


                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                                 <label for="floatingTextarea">Email</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="mail" value="<?php echo $edit['email']?>">
                               
                            </div>

                            <div class="form-floating mb-3"> 
                                 <label for="floatingTextarea">Password</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="pass" value="<?php echo $edit['pass']?>">
                              
                            </div>

                            <div class="form-floating mb-3">
                                 <label for="floatingTextarea">Address</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="add" value="<?php echo $edit['address']?>">
                               
                            </div>

                            <div class="form-floating mb-3"> 
                                 <label for="floatingTextarea">DOB</label>
                            <input type="date" class="form-control" id="floatingPassword"
                                    placeholder="" name="con" value="<?php echo $edit['dob']?>">
                              
                            </div>
                            <div class="form-floating mb-3"> 
                            <label for="floatingTextarea">Select Role</label>
                           <select name="role" class="form-control">
                              
<?php
$q="select * from role  where status=0";
$res=mysqli_query($con,$q);
while($data=mysqli_fetch_assoc($res)){
?>
<option value="<?php echo $data['r_id']?>"
<?php
if($data['r_id']==$edit['r_id']){
    echo "selected";
}
?>

><?php echo $data['user_role']?></option>
<?php
}
?>

                            </select>
                               
                            </div>
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Edit</button>
                          
                            </form>
                        </div>
                    </div>
                            </div>

