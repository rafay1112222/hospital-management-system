<?php
include 'header.php';
$idd=$_GET['id'];
$q="delete from reports where R_id='$idd'";
$result=mysqli_query($con,$q);
if($result){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='showReport.php';</script>";
}
else{
echo "<script>alert('error');</script>";
}

?>

<?php
include 'footer.php';
?>