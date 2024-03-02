<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="update role set status=1 where r_id='$idd'";
$result=mysqli_query($con,$q);
if($result){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='showrole.php';</script>";
}
else{
echo "<script>alert('error');</script>";
}

?>

<?php
include 'footer.php';
?>