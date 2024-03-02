<?php
include 'connect.php';
session_start();
$idd=$_GET['id'];
$i=$_SESSION['id'];
$que="select * from vaccine_available where V_idd=$idd";
$res=mysqli_query($con,$que);
$count=mysqli_num_rows($res);
$abc="select * from users join hospital on hospital.U_id=users.U_id where users.U_id=$i";
$abcd=mysqli_query($con,$abc);
$abcde=mysqli_fetch_assoc($abcd);
$abcdef=$abcde['H_id'];
if($count==0)
{
    $q="INSERT INTO `vaccine_available`(`V_idd`, `H_id`, `U_id`, `Statuss`) values('$idd','$abcdef','$i','Available')";

}
else{
$q="UPDATE vaccine_available 
SET  Statuss   = 'Available'
WHERE V_idd =$idd";}
$result=mysqli_query($con,$q);
if($result)
{
    echo "<script> alert('done');</script>";
    echo "<script> window.location.href='showVaccine.php';</script>";
}
else{
    echo mysqli_error($con);
}
?>