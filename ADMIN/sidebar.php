<!-- Sidebar Start -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"></li>
                <li class="active">
                <li class="submenu">
                    <a href=""><i class="fa fa-heartbeat" style="font-size:24px"></i><span><b> <?php echo $_SESSION['adminname'] ?></b></span>
                    <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                        <li><a href="login.php"> Login </a></li>
                        <li><a href="logout.php"> Logout </a></li></a>
                        </ul>
                </li>

               <li class="submenu">
                    <a href=""><i class="fa fa-calendar" style="font-size:24px"></i> <span>Appointments</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="showapp.php">Vaccine Appointments</a></li>
                        <li><a href="showapp2.php">Test Appointments</a></li>

                    </ul>
                </li>
                  <li class="submenu">
                    <a href=""><i class="fa fa-wheelchair" style="font-size:24px"></i> <span>Patients</span> 
                    <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                    <li><a href="addPatient.php">add patient</a></li>
                    <li><a href="showPatient.php">show patient</a></li>
                    </ul>
                </li>


                <li class="submenu">
                    <a href=""><i class="fa fa-stethoscope" style="font-size:24px"></i> <span>Reports</span> 
                    <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                    <li><a href="addReport.php">Add Reports</a></li>
                    <li><a href="showReport.php">Show Reports</a></li>
                    </ul>
                </li>


                <li class="submenu">
                    <a href=""><i class="fa fa-hospital-o"  style="font-size:24px"></i> <span>Hospital</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="addHospital.php">Add Hospital</a></li>
                        <li><a href="showHosp.php">Show Hospital</a></li>

                    </ul>
                </li>
                <li class="submenu">
                    <a href=""><i class="fa fa-calendar-check-o" style="font-size:24px"></i> <span>Vaccine</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="addVaccine.php">Add Vaccine</a></li>
                        <li><a href="showVaccine.php">Show Vaccine</a></li>

                    </ul>
                </li>
               
                <li>
                <li class="submenu">
                    <a href=""><i class="fa fa-h-square" style="font-size:24px"></i><span>Tests</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="AddTest.php">Add Test</a></li>
                        <li><a href="showTest.php">Show Test</a></li>

                    </ul>
                </li>
                </li>

                <li class="submenu">
                    <a href=""><i class="fa fa-user" style="font-size:24px"></i> <span> Role </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="addRole.php">Add role</a></li>
                        <li><a href="showrole.php">Show role</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href=""><i class="fa fa-user-md" style="font-size:24px"></i></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="addUser.php">Add User</a></li>
                        <li><a href="showUser.php">Show User</a></li>

                    </ul>
                </li>


                
                <br>
                <br>
                <br>

                </li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</div>
</div>