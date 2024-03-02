<?php
include ('header.php');
include ('sidebar.php');
include ('connection.php');
?>

<div class="page-wrapper">
<div class="content">
<h3 class="mb-0">Vaccine Appointments</h3>
<div class="col-12">
<div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Vaccination</th>
                                            
                                            <th scope="col">Patient</th>
                                            <th scope="col">Hospital</th>
                                            <th scope="col">Status</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q="select * from appoinment";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                            <td><?php echo $data['A_id']?></td>
                                            <td><?php echo $data['Date']?></td>
                                            <td><?php echo $data['Time']?></td>
                                            <td><?php echo $data['V_id']?></td>
                                        
                                            <td><?php echo $data['P_id']?></td>
                                            <td><?php echo $data['H_id']?></td>
                                            <td><?php echo $data['Statuss']?></td>
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


