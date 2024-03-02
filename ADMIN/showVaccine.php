<?php
include ('header.php');
include('sidebar.php');
$select_query = "SELECT * FROM `vaccination` ";
$res = mysqli_query($con, $select_query);
?>

<div class="page-wrapper">
<div class="content">
<div class="col-12">
<div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Vaccine Name</th>
                                            <th scope="col">Vaccine Image</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q="select * from vaccination where status=0";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                            <td><?php echo $data['V_id']?></td>
                                            <td><?php echo $data['V_name']?></td>
                                           <td> <img class="card" style="height: 100px;width: 100px;"  src="<?php echo $data['V_img']?>" alt="..." /></td>
                                            <td><a href="editVacc.php?id=<?php echo $data['V_id']?>"><i class="fa fa-edit" style="font-size:24px"></i></i></a></td>
                                            <td><a href="deleteVacc.php?id=<?php echo $data['V_id']?>"><i class="fa fa-trash-o" style="font-size:24px"></i></i></a></td>
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
            <!-- Table End -->



