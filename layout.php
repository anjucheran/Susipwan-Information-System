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

                </div>
                <!-- /. ROW  -->
                <div class="row">




                  	<?php

                  	if(isset($_REQUEST["done"])){

                  	//include ("dbconnection.php");
                  	$link =mysqli_connect("localhost","root","","susipwan1")
                  	or die('error connecting to mysql server');

                    $link =mysqli_connect("localhost","root","","Mem")
                    or die('error connecting to mysql server');

                  	$name=$_POST["name"];
                  	$dob=$_POST["dob"];
                  	$nic=$_POST["nic"];
                  	$address=$_POST["address"];
                  	$contact=$_POST["contact"];
                  	$email=$_POST["email"];






                  	$sql="INSERT INTO users (name,nic,address,contact,username,dob,usertype) VALUES ('".$name."','".$nic."','".$address."','".$contact."','".$email."','".$dob."','operator')";
                    $sqli="INSERT INTO members (member_name, member_password) VALUES ('operator','111111')";
                  	if(mysqli_query($link,$sql)){

                  	}else{
                  			echo '<script>alert("Error Occured!")</script>';
                  		}

                  		mysqli_close($link);

                  }
                  	?>

                  <html>

                  <body>


                    	<section class="registration_form">
                    		<div class="contain">
                    			<he><h2>Operator Registration</h2></he>
                  	        <form action="add_operator.php" method="post" name="form" onsubmit="return validateForm()">
                  	            <p>
                  	                <label for="name" class="name">Name
                  	                </label><br>
                  	                <input type="text" name="name" id="name" required/>
                  	            </p>
                  	            <p>
                  	                <label>DOB<br><input type="date" name="dob" required/></label>
                  	            </p>
                  	            <p>
                  	              <label name="nic">NIC</label>
                  	              <input type="text" pattern="(.){10,10}" name="nic" id="nic" required/>
                  	            </p>
                  	            <p>
                  	                <label name="address">Address</label>
                  	                <input type="text" name="address" id="address" required/>
                  	            </p>
                  	            <p>
                  	                <label name="contacNo">Contact</label>
                  	                <input type="tel" name="contact" pattern="(.){10,10}" placeholder="0xx xxxxxxx" id="contact" required/>
                  	            </p>
                  	            <p>
                  	                <label>Email</label>
                  	                <input type="email" name="email" id="email" required/>
                  	            </p>

                  	            <p class="buttons">
                  	                <input class="btn btn-primary" type="" value="Back"/>

                  	                <input class="btn btn-primary" type="reset" value="Clear"/>
                  	                <input class="btn btn-primary" type="submit" value="Register" name="done" id="done"/>
                  	            </p>
                  	        </form>
                    		</div>
                      </section>

                  	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
