<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="update test set status=1 where T_id='$idd'";
$result=mysqli_query($con,$q);
if($result){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='showTest.php';</script>";
}
else{
echo "<script>alert('error');</script>";
}

?>

<?php
include 'footer.php';
?>