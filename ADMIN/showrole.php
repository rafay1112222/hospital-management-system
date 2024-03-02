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
                                            <th scope="col">Role Name</th>
                                            
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q="select * from role where status=0";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                           
                                            <td><?php echo $data['r_id']?></td>
                                            <td><?php echo $data['user_role']?></td>
                                          
            
                                            <td><a href="editrole.php?id=<?php echo $data['r_id']?>">  <i class="fa fa-edit" style="font-size:24px"></i></a></td>
                                            <td><a href="deleterole.php?id=<?php echo $data['r_id']?>"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
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

