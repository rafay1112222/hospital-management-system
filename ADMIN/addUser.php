<?php
include ('header.php');
include('sidebar.php');
if(isset($_POST['sub'])){
    $u=$_POST['User'];
    $e=$_POST['mail'];
    $p=$_POST['pass'];
    $add=$_POST['add'];
    $dob=$_POST['con'];
    $role=$_POST['role'];
    $qq="INSERT INTO `users`(`r_id`, `name`, `email`, `pass`, `address`, `dob`) VALUES('$role','$u','$e',
    '$p','$add','$dob')";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('inserted');</script>";
        echo "<script>window.location.href='showUser.php';</script>";
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
<h3 class="mb-0">Add User</h3>
</div>
</div>
                  
<br>

                       
                          
                            <form action="" method="post"> 
                                 <label for="floatingInput">User Name</label>
                            <div class="form-floating mb-3">
                                <input type="text" name="User" class="form-control" id="floatingInput"
                                    placeholder="">
                              
                            </div>

                            <label for="floatingTextarea">Email</label>
                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="mail">
                              
                            </div>
                            <label for="floatingTextarea">Password</label>
                            <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="pass">
                               
                            </div>
                             <label for="floatingTextarea">Address</label>
                            <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="add">
                                
                            </div>
                             <label for="floatingTextarea">DOB</label>
                            <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingPassword"
                                    placeholder="" name="con">
                               
                            </div>
                            <label class="form-label" for="exampleFormControlInput1">Select Role</label>
                            <div class="form-floating mb-3">
                            <select class="form-control" id="exampleFormControlInput1"
                                    aria-label="Floating label select example" name="role">
                                

                             







<?php
$q="select * from role  where status=0";
$res=mysqli_query($con,$q);
while($data=mysqli_fetch_assoc($res)){
?>
<option value="<?php echo $data['r_id']?>"><?php echo $data['user_role']?></option>
<?php
}
?>

                            </select>
                                <label for="floatingTextarea"></label>
                            </div>
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                          
                            </form>
                        </div>
                    </div>
                            </div>

                    
