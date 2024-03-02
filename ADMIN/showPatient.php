<?php
include ('header.php');
include('sidebar.php');
?>
 <div class="page-wrapper">
<div class="content">
<div class="col-12">
<div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User Id</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Blood Group</th>
                                         
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q="select * from patient where status=0";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                            <td><?php echo $data['P_id']?></td>
                                         
                                            <td><?php echo $data['U_id']?></td>
                                            <td><?php echo $data['Gender']?></td>
                                            <td><?php echo $data['Blood_G']?></td>
                                        
                                            <td><a href="editPat.php?id=<?php echo $data['P_id']?>"> <i class="fa fa-edit" style="font-size:24px"></i></a></td>
                                            <td><a href="deletePat.php?id=<?php echo $data['P_id']?>"> <i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
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


