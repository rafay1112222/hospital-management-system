<?php
include ('header.php');
include('sidebar.php');
?>
<div class="page-wrapper">
<div class="content">
<div class="col-12">
<div class="QA_table mb_30">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Test Name</th>
                                            
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q="select * from test where status=0";
                                        $res=mysqli_query($con,$q);
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                          
                                           
                                            <td><?php echo $data['T_id']?></td>
                                            <td><?php echo $data['Test_Name']?></td>
                                            <td><a href="edittest.php?id=<?php echo $data['T_id']?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                                            <td><a href="deletetest.php?id=<?php echo $data['T_id']?>"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
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



