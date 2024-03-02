<?php
include 'header.php';
$id=$_GET['id'];
$q="update appoinments set Statuss='declined' where A_id='$id'";
$result=mysqli_query($con,$q);
if($result){
    echo "<script>alert('updated');</script>";
    echo "<script>window.location.href='showapp2.php';</script>";
}
else{
echo "<script>alert('error');</script>";
}
?>

<?php
include 'footer.php';
?>