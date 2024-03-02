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
                                            <th scope="col">User Name</th>
                                            <th scope="col">Role Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">DOB</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q="select * from users where status=0";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                            <td><?php echo $data['U_id']?></td>
                                            <td><?php echo $data['name']?></td>
                                            <td><?php echo $data['r_id']?></td>
                                            <td><?php echo $data['email']?></td>
                                            <td><?php echo $data['pass']?></td>
                                            <td><?php echo $data['address']?></td>
                                            <td><?php echo $data['dob']?></td>
                                            <td><a href="editUser.php?id=<?php echo $data['U_id']?>"> <i class="fa fa-edit" style="font-size:24px"></i></a></td>
                                            <td><a href="deleteUser.php?id=<?php echo $data['U_id']?>"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
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
          

