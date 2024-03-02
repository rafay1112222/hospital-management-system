<?php
include( 'header.php');
include( 'sidebar.php');
$id=$_SESSION['id'];
?>
   <div class="page-wrapper">
<div class="content">
<div class="col-12">
<div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            
                                            <th scope="col">Test</th>
                                            <th scope="col">Patient</th>
                                            <th scope="col">Hospital</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Accept</th>
                                            <th scope="col">Decline</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q="select * from appoinments join users on appoinments.P_id=users.U_id join test
                                        on test.T_id=appoinments.T_id join hospital on hospital.H_id=appoinments.H_id 
                                        where hospital.U_id='$id'";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                            <td><?php echo $data['A_id']?></td>
                                            <td><?php echo $data['Date']?></td>
                                            <td><?php echo $data['Time']?></td>
                                            
                                            <td><?php echo $data['Test_Name']?></td>
                                            <td><?php echo $data['name']?></td>
                                            <td><?php echo $data['H_name']?></td>
                                            <td><?php echo $data['contact']?></td>
                                            <td><?php echo $data['Statuss']?></td>
                                            <td><a href="accept2.php?id=<?php echo $data['A_id']?>">accept</a></td>
                                            <td><a href="dec2.php?id=<?php echo $data['A_id']?>">decline</a></td>
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
