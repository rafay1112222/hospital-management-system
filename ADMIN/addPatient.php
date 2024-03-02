<?php
include ('header.php');
include('sidebar.php');
if(isset($_POST['sub'])){
    $n=$_POST['name'];
    $role=$_POST['user'];
    $blood=$_POST['blood'];
    $gen=$_POST['gen'];
    $qq="INSERT INTO `patient`(`U_id`, `Blood_G`, `Gender`, `Name`) VALUES 
    ('$role','$blood','$gen','$n')";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('inserted');</script>";
        echo "<script>window.location.href='showPatient.php';</script>";
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
<h3 class="mb-0">Add Patient</h3>
</div>
</div>
                  
<br>

    <br>
                            <form action="" method="post">
                            <div class="form-floating mb-3">
                                <label for="floatingTextarea">Patient Name</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="name">
                                
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
<option value="<?php echo $data['U_id']?>"><?php echo $data['name']?></option>
<?php
}
?>
</select>

</div>

                            
                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">  
                                 <label for="floatingTextarea">Blood Group</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="blood">
                             
                            </div>

                            <div class="form-floating mb-3"> 
                                <label for="floatingTextarea">Gender</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="gen">
                               
                            </div>

     
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                            </form>
                        </div>
                    </div>
                            </div>

