<?php
include ('header.php');
include('sidebar.php');
include('connection.php');
if(isset($_POST['sub'])){
    $r=$_POST['res'];
    $a=$_POST['app'];
    $t=$_POST['test'];


    $qq="INSERT INTO `reports`(`T_id`, `Results`, `A_id`) VALUES 
    ('$t','$r','$a')";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('inserted');</script>";
        echo "<script>window.location.href='showReport.php';</script>";
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
<h3 class="mb-0">Add Report</h3>
</div>
</div>
                  
<br>

    <br>
<!-- 
    <label class="form-label" for="exampleFormControlInput1">Select Role</label>
                            <div class="form-floating mb-3">
                            <select class="form-control" id="exampleFormControlInput1"
                                    aria-label="Floating label select example" name="role"> -->




                        
                            <form action="" method="post">
                            <label class="form-label" for="exampleFormControlInput1">Select Test</label>
                            <div class="form-floating mb-3">
                            <select class="form-control" id="exampleFormControlInput1"
                                    aria-label="Floating label select example" name="test">

<?php
$q="select * from test where status=0";
$res=mysqli_query($con,$q);
while($data=mysqli_fetch_assoc($res)){
?>
<option value="<?php echo $data['T_id']?>"><?php echo $data['Test_Name']?></option>
<?php
}
?>
</select>

</div>


<div class="form-floating mb-3">
<label class="form-label" for="exampleFormControlInput1">Appointment Date & Timing</label>
                            <div class="form-floating mb-3">
                            <select class="form-control" id="exampleFormControlInput1"
                                    aria-label="Floating label select example" name="app">

<?php
$q="select * from appoinment";
$res=mysqli_query($con,$q);
while($data=mysqli_fetch_assoc($res)){
?>
<option value="<?php echo $data['A_id']?>"><?php echo $data['Date'].' , '.$data['Time']?></option>
<?php
}
?>
</select>

</div>


                            <div class="form-floating mb-3">
                                   <label for="floatingPassword">Result</label>
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="res">
                             
                            </div>

                            <div class="form-floating mb-3">
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                            </form>
                        </div>
                    </div>
                    </div>
</div>

