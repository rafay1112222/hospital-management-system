<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="update users set status=1 where U_id='$idd'";
$result=mysqli_query($con,$q);
if($result){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='showUser.php';</script>";
}
else{
echo "<script>alert('error');</script>";
}

?>

