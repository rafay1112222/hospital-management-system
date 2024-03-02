<?php
include ('header.php');

include('sidebar.php');
include('connection.php');
$idd=$_GET['id'];
$q="select * from hospital where H_id='$idd'";
$res=mysqli_query($con,$q);
$edit=mysqli_fetch_assoc($res);
if (isset($_POST['sub'])) {
    $hn = $_POST['Hosp'];
    $hd = $_POST['Detail'];
    $role = $_POST['user'];
    $loc = $_POST['loc'];
    $cont = $_POST['con'];

    
        $img = $_FILES['h_img'];
        $imgname = $_FILES['h_img']['name'];
        $img_tempname =$_FILES['h_img']['tmp_name'];
        $img_path = "img/" . $imgname;
        move_uploaded_file($img_tempname, $img_path);
  
    $qq = "update hospital set U_id='$role', H_name='$hn', h_img='$img_path', Contact='$cont', Details='$hd', location='$loc' where  H_id='$idd'";
    $res = mysqli_query($con, $qq);
    if ($res) {
        echo "<script>alert('updated');</script>";
        echo "<script>window.location.href='showHosp.php';</script>";
    } else {
        echo "Error: " . $qq . "<br>" . mysqli_error($con);
    }
}
   

?>
<!-- Form Start -->
<br><br>
<!DOCTYPE html>
<html lang="en">


<!-- add-doctor24:06-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>


<?php 

?>
<div class="page-wrapper">
        <div class="content">
        <div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Edit Hospital</h3>
</div>
</div>
<form action="" method="post" enctype="multipart/form-data">

                  
                   
<br>
                           <div class="form-floating mb-3">
                           <label for="form-label">Hospital Name</label>
                               <input type="text" name="Hosp" class="form-control" id="exampleFormControlInput1" value="<?php echo $edit['H_name']?>">
                               
                           </div>
                           <div class="form-floating mb-3">
                           <label for="floatingPassword">Hospital Details</label>
                               <input type="text" class="form-control" id="exampleFormControlInput1"
                                    name="Detail" value="<?php echo $edit['Details']?>">
                               
                           </div>
                           <div class="form-floating mb-3">
                           <label for="exampleFormControlInput1">User Name</label>
                           <select  class="form-control" id="exampleFormControlInput1" name="user">
                       <?php
                       $user="select * from users where r_id=3 and status=0";
                       $users=mysqli_query($con,$user);
                       while($data=mysqli_fetch_assoc($users)) { ?>
                       <option value="<?php echo $data['U_id'] ?>"
                       <?php
                       if($data['U_id']==$edit['U_id']){
                        echo "selected";
                       }
                       ?>
                       
                       
                       > <?php echo $data['name'] ?> </option>
                       <?php } ?>
</select>
                           <!-- <input type="text" class="form-control" id="exampleFormControlInput1"name="user" value="<?php echo $edit['U_id']?>">
                             </div> -->
                           <div class="form-floating mb-3">
                           <label>Hospital Image:</label>
                           <div class="custom-file">
                           <input type="file"  name="h_img" class="form-control" id="exampleFormControlInput1" value="<?php echo $edit['h_img']?>">
                                        <img id="proimg" />
                           </div>
                           </div>
                           <div class="form-floating mb-3">
                           <label for="form-label">Location</label>
                           <input type="text" class="form-control" id="exampleFormControlInput1"
                                  name="loc" value="<?php echo $edit['location']?>">
                              
                           </div>
                           <div class="form-floating mb-3">
                           <label for="form-label">Contact</label>
                           <input type="text" class="form-control" id="exampleFormControlInput1"
                                   placeholder="" name="con" value="<?php echo $edit['Contact']?>">
                              
                           </div>
                           <button type="submit"  class="btn btn-primary form-control" name="sub">Update</button>
                           <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js"></script>
                           </form>
                       </div>
                   </div>
                               </div>
</div></div>
</div>

<div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html> 