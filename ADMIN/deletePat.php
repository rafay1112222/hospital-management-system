<?php
include 'header.php';
$idd=$_GET['id'];
$q="update patient set status=1 where P_id='$idd'";
$result=mysqli_query($con,$q);
if($result){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='showPatient.php';</script>";
}
else{
echo "<script>alert('error');</script>";
}

?>

<?php
include 'footer.php';
?>