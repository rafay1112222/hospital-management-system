<?php
include ('header.php');
include('sidebar.php');
$idd=$_GET['id'];
$q="select * from vaccination where V_id='$idd'";
$result=mysqli_query($con,$q);
$edit=mysqli_fetch_assoc($result);
if(isset($_POST['sub'])){
    $vn=$_POST['vacc'];
    $img = $_FILES['V_img'];
    $imgname = $_FILES['V_img']['name'];
    $img_tempname =$_FILES['V_img']['tmp_name'];
    $img_path = "img/" . $imgname;
    move_uploaded_file($img_tempname, $img_path);

    $qq="update vaccination set V_name='$vn',V_img='$img_path' where V_id='$idd'";
    $result=mysqli_query($con,$qq);
    if($result){
        echo "<script>alert('updated');</script>";
        echo "<script>window.location.href='showVaccine.php';</script>";
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
                            <h6 class="mb-4">Edit Vaccine</h6>
                            
                          <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                            <label for="floatingTextarea">Vaccine Name</label>
                            <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="" name="vacc" value='<?php echo $edit['V_name']?>'>

                            </div>
                            <div class="form-floating mb-3">
                           <label>Vaccine Image:</label>
                           <div class="custom-file">
                           <input type="file"  name="V_img" class="form-control" id="exampleFormControlInput1" value="<?php echo $edit['V_img']?>">
                                        <img id="proimg" />
                           </div>
                           </div>
                            <button type="submit"  class="btn btn-primary form-control" name="sub">Edit</button>
                            </form>
                        </div>
                    </div>
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
                    
