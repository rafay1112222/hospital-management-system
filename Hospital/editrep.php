<?php
include ('header.php');
include ('sidebar.php');
$idd=$_GET['id'];
$q="select * from reports where R_id='$idd'";
$result=mysqli_query($con,$q);
$edit=mysqli_fetch_assoc($result);
if(isset($_POST['sub'])){
    $r=$_POST['res'];
    $a=$_POST['app'];
    $t=$_POST['test'];
    $v=$_POST['vacc'];

    $qq="update reports set T_id='$t',Results='$r', A_id='$a' where R_id='$idd'";
        $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('updated');</script>";
        echo "<script>window.location.href='showReport.php';</script>";
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
                                    <thead>
                            <form action="" method="post">

                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                            <label for="floatingTextarea">Test</label>
                            <select class="form-control" id="exampleFormControlInput1"
                                    aria-label="Floating label select example"  name="test">

<?php
$q="select * from test where status=0";
$res=mysqli_query($con,$q);
while($data=mysqli_fetch_assoc($res)){
?>
<option value="<?php echo $data['T_id']?>"
<?php
if($data['T_id']==$edit['T_id']){
    echo "selected";
}
?>

><?php echo $data['Test_Name']?></option>
<?php
}
?>
</select>

</div>



<div class="form-floating mb-3">
<div class="form-floating mb-3">
<label for="floatingTextarea">Appointment date and time</label>
                            <select class="form-control" id="exampleFormControlInput1"
                                    aria-label="Floating label select example"  name="app">

<?php
$q="select * from appoinment";
$res=mysqli_query($con,$q);
while($data=mysqli_fetch_assoc($res)){
?>
<option value="<?php echo $data['A_id']?>"

<?php
if($data['A_id']==$edit['A_id']){
    echo "selected";
}
?>
><?php echo $data['Date'].' , '.$data['Time']?></option>
<?php
}
?>
</select>

</div>


                            <div class="form-floating mb-3">
                            <label for="floatingPassword">Result</label>
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="res" value="<?php echo $edit['Results']?>">
                               
                            </div>

                            <div class="form-floating mb-3">
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Add</button>
                            </form>
                        </div>
                    </div>
                    </div>
</div>

                    
