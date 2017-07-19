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
                      <h1 class="page-head-line">Add Class

          </h1>

                  </div>

                </div>
                <!-- /. ROW  -->
                <div class="row">


                  <?php

                	if(isset($_REQUEST["done"])){

                	include ("php/dbconnection.php");

                	$name=$_POST["class"];
                	$teachername=$_POST["teachername"];
                	$day=$_POST["day"];
                	$time=$_POST["time"];
                	$hall=$_POST["hall"];






                	$sql="INSERT INTO classdetails (classname,teacher,day,time,hall) VALUES ('".$name."','". $teachername."', '".$day."','".$time."','".$hall."')";

                	if(mysqli_query($link,$sql)){
                		// echo "New record created successfully";
                		echo '<script>alert("Successful")</script>';
                	}else{
                			echo '<script>alert("Error Occured!")</script>';;
                		}

                		mysqli_close($link);

                }
                	?>
                <html>
                <head>
                	<title>Add class</title>
                	 <link rel="stylesheet" type="text/css" href="css/addClass.css" />
                    <style type="text/css" >
                        body{
                        background-image: url(back5.jpg);
                        }
                    </style>

                 <script type="text/javascript">
                 			function goBack() {
                            window.history.back()
                            }

                 		    function check_fields(){
                            var name = document.getElementById('class').value;
                            var dob = document.getElementById('teachername').value;
                            var nic = document.getElementById('day').value;
                            var address = document.getElementById('time').value;
                            var contact = document.getElementById('hall').value;


                            if (name =='' || dob=='' || nic=='' || address=='' || contact==''){
                                alert("Fill all required fields");
                                return false;
                            }
                            else{
                                return true;
                            }
                        }

                 </script>
                </head>
                <body>
                <form  action="addClass3.php" method="POST" onsubmit="return check_fields()";>
                	<div>
                		<label>Class</label>

                		<select class="Class" name="class" id="class" required>
                				<option value="" disabled selected>-</option>
                				<option value="physics_2018t">Physics_2018T</option>
                				<option value="physics_2019t">Physics_2019T</option>
                				<option value="physics_2018r">Physics_2018R</option>
                				<option value="chemistry_2018t">Chemistry_2018T</option>
                				<option value="chemistry_2019t">Chemistry_2019T</option>

                		</select>
                		<label>Teacher name<!--<input type="text" name="teachername" id="teachername" /> --></label>

                		<select class="Day" name="teachername" id="teachername" required>
                				<option value="" disabled selected>-</option>
                				<option value="Mr.Jayasooriya">Mr.Jayasooriya</option>
                				<option value="Mr.Herath">Mr.Herath</option>
                				<option value="Mr.Darshana">Mr.Darshana</option>




                		</select>


                		<label>Day</label>

                		<select class="Day" name="day" id="day" required>
                				<option value="" disabled selected>-</option>
                				<option value="Monday">Monday</option>
                				<option value="Tuesday">Tuesday</option>
                				<option value="Wednesday">Wednesday</option>
                				<option value="Thursday">Thursday</option>
                				<option value="Friday">Friday</option>
                				<option value="Friday">Saturday</option>
                				<option value="Sunday">Sunday</option>


                		</select>

                		<label>Time<input type="text" name="time" id="time" required /> </label>


                		<br><label>Hall</label><br>
                		<select class="hall" name="hall" id="hall" required>
                				<option value="" disabled selected>-</option>
                				<option value="Hall A">Hall A</option>
                				<option value="Hall B">Hall B</option>
                				<option value="Hall C">Hall C</option>
                				<option value="Hall D">Hall D</option>


                		</select>

                	</div>
<br></br>
                	<div>

                        <button type="reset" value="reset">Clear</button>
                        <input class="register" type="submit" value="Done" name="done" id="done"/>
                	</div>
                </form>

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
