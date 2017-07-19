
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
                        <a class="active-menu" href="home_owner.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>

					 <li>
                        <a href="add_teacher.php"><i class="fa fa-graduation-cap "></i>Add Teacher</a>
                    </li>
                    <li>
                                 <a href="add_operator.php"><i class="fa fa-users "></i>Add Operator</a>
                             </li>
					 <li>
                        <a href="owner_report.php"><i class="fa fa-file-text "></i>Report</a>
                    </li>




					<li>
                        <a href="setting_owner.php"><i class="fa fa-cogs "></i>Setting</a>
                    </li>

					 <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->