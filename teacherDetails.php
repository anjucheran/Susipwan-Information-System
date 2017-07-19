<?php
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SUSIPWAN Classes</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
include("php/header_teacher.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">

                  <div class="col-md-12">
                      <h1 class="page-head-line">Class Details

                  </h1>

                  </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">





                  <?php
                  include ("php/dbconnection.php");
                  mysqli_select_db($link,'testteacherdb');
                  $sql ="SELECT *  FROM classdetails";
                  $records = mysqli_query($link,$sql);

                  ?>


                  <html>
                  <head>
                  	<title>Class Details</title>
                  	<link rel="stylesheet" type="text/css" href="css/classDetails.css" />
                  </head>
                  <body>
                  <div class="Table">
                      

                  	<table class="table" width="600" border="1" cellpadding="1" cellspacing="1" align="center">
                  		<tr>
                  		<th>Class name</th>
                  		<th>Teacher</th>
                  		<th>Day</th>
                  		<th>Time</th>
                  		<th>Hall</th>
                  		</tr>


                  <?php
                  while($classd= mysqli_fetch_assoc($records)){
                  	echo "<tr>";
                  	echo "<td>".$classd['classname']."</td>";
                  	echo "<td>".$classd['teacher']."</td>";
                  	echo "<td>".$classd['day']."</td>";
                  	echo "<td>".$classd['time']."</td>";
                  	echo "<td>".$classd['hall']."</td>";

                  	echo "</tr>";


                  }
                  ?>
                  </table>
                  </div>

                  </body>
                  </html>





                </div>
                <!-- /. ROW  -->


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
      SUSIPWAN Classes | Developed By : <a href="https://github.com/deHasara" target="_blank">cyberX.com</a>
    </div>

   <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>



</body>
</html>
