<?php
include ('header.php');
include ('sidebar.php');
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
                                            <th scope="col">Status</th>
                                            <th scope="col">Available</th>
                                            <th scope="col">Not available</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q="select * from vaccination  left join vaccine_available on vaccination.V_id=vaccine_available.V_idd where vaccination.status=0";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){


                                       
                                        ?>
                                    
                                        <tr>
                                          
                                            <td><?php echo $data['V_id']?></td>
                                            <td><?php echo $data['V_name']?></td>
                                            <td> <img class="card" style="height: 100px;width: 100px;"  src="../ADMIN/<?php echo $data['V_img']?>" alt="..." /></td>
                                            <td><?php echo $data['Statuss']?></td>
                                            <td><a href="avail.php?id=<?php echo $data['V_id']?>">Available</td>
                                            <td><a href="navail.php?id=<?php echo $data['V_id']?>">Not Available</td>
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


