<?php
include('header.php');
include('sidebar.php');
include('connection.php');

if (isset($_POST['sub'])) {
    $hn = $_POST['Hosp'];
    $hd = $_POST['Detail'];
    $role = $_POST['user'];
    $loc = $_POST['loc'];
    $cont = $_POST['con']; // Corrected the name of the contact input
    $img = $_FILES['h_img'];
    $imgname = $_FILES['h_img']['name'];
    $img_tempname = $_FILES['h_img']['tmp_name'];
    $img_path = "img/" . $imgname;
    move_uploaded_file($img_tempname,$img_path);
 $qq = "INSERT INTO `hospital`(`U_id`, `H_name`, `h_img`, `Contact`, `Details`, `location`) VALUES ('$role','$hn','$img_path','$cont','$hd','$loc')";
            $result = mysqli_query($con, $qq);
            if ($result) {
                echo "<script>alert('Inserted');</script>";
                echo "<script>window.location.href='showHosp.php';</script>";
            } else {
                echo "Error: " . $qq . "<br>" . mysqli_error($con);
            }
        } else {
            echo "Error: Image size exceeds the limit.";
        }
     

?>

<!-- Rest of your HTML code -->



<body>
    <div class="page-wrapper">
        <div class="content">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Add Hospitals</h3>
                                </div>
                            </div>
                            <br>
                            <br>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <label for="form-label">Hospital Name</label>
                                    <input type="text" name="Hosp" class="form-control" id="exampleFormControlInput1">

                                </div>
                                <div class="form-floating mb-3">
                                    <label for="floatingPassword">Hospital Details</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Detail">

                                </div>
                                <div class="form-floating mb-3">
                                    <label for="floatingTextarea">Users</label>
                                    <select class="form-control" id="exampleFormControlInput1"
                                        aria-label="Floating label select example" name="user">

                                        <?php
                                        $q = "select * from users where r_id=3 and status=0";
                                        $res = mysqli_query($con, $q);
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <option value="<?php echo $data['r_id'] ?>">
                                                <?php echo $data['name'] ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="form-floating mb-3">
                                    <label>Hospital Image:</label>
                                    <div class="custom-file">
                                        <input type="file" name="h_img" class="form-control"
                                            id="exampleFormControlInput1">
                                        <img id="proimg" />
                                    </div>
                                </div>
                                <br>

                                <div class="form-floating mb-3">
                                    <label for="form-label">Location</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="loc">

                                </div>
                                <div class="form-floating mb-3">
                                    <label for="form-label">Contact</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="con">

                                </div>
                                <button type="submit" class="btn btn-primary form-control" name="sub">Add</button>
                                <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js"></script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                        .css("visibility", "visible");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>