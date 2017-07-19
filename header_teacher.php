
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SUSIPWAN Classes</a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo "Logged In";?>
                            <br />

                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>

					 <li>
                        <a href="addClass3.php"><i class="fa fa-university "></i>Add Class</a>
                    </li>
                    <li>
                                 <a href="teacherDetails.php"><i class="fa fa-file-text "></i>View Details</a>
                             </li>
					 <li>
                        <a href="studentCount2.php"><i class="fa fa-users "></i>Student Count</a>
                    </li>




					<li>
                        <a href="setting_teacher.php"><i class="fa fa-cogs "></i>Setting</a>
                    </li>

					 <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
