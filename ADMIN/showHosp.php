<?php
include ('header.php');
include('sidebar.php');?>
<div class="page-wrapper">
<div class="content">
<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Hospitals</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">

</div>
</div>
</div>
<div class="add_button ms-2">

</div>
</div>
</div>

                            <div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">hospital Image</th>
                                            <th scope="col">hospital Name</th>
                                            <th scope="col">User Id</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q="select * from hospital where status=0";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                            <td><?php echo $data['H_id']?></td>
                                            <td><img src="<?php echo $data['h_img']?>" height="50" width="50" alt=""></td>
                                            <td><?php echo $data['H_name']?></td>
                                            <td><?php echo $data['U_id']?></td>
                                            <td><?php echo $data['Contact']?></td>
                                            <td><?php echo $data['Details']?></td>
                                            <td><?php echo $data['location']?></td>
                                            <td><a href="editHospital.php?id=<?php echo $data['H_id']?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                                            <td><a href="deleteHos.php?id=<?php echo $data['H_id']?>"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
                                        </tr>
                                        <?php
                                        }
                                        
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
            