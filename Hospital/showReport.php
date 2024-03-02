<?php
include ('header.php');
include ('sidebar.php');

$iddd=$_SESSION['id'];
$idd="select * from hospital where U_id='$iddd'";
$ids=mysqli_query($con,$idd);
$idss=mysqli_fetch_assoc($ids);
$id=$idss['H_id'];
?>
 <div class="page-wrapper">
<div class="content">
<div class="col-12">
<div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Test Id</th>
                                            <th scope="col">Appoinment Id</th>
                                            <th scope="col">Results</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q="select * from reports join appoinments on appoinments.A_id=reports.A_id where appoinments.H_id='$id'";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                            <td><?php echo $data['R_id']?></td>
                                            <td><?php echo $data['T_id']?></td>
                                       
                                            <td><?php echo $data['Results']?></td>
                                            <td><?php echo $data['A_id']?></td>
                                       
                                            <td><a href="editrep.php?id=<?php echo $data['R_id']?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                                            <td><a href="deleteRep.php?id=<?php echo $data['R_id']?>"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
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


