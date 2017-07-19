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
                      <h1 class="page-head-line">Student Count

          </h1>

                  </div>

                </div>
                <!-- /. ROW  -->
                <div class="row">





                  <?php
                     $out =NULL;
                     $table=NULL;


                     if(isset($_REQUEST["submit"])){
                     include ("php/dbconnection.php");
                     $table =$_POST["select_table"];
                    // echo $table;
                     $sqlget = "SELECT * FROM  ".$table." ";
                     $sqldata = mysqli_query($link,$sqlget);
                     $out = mysqli_num_rows($sqldata);
                     //echo $out;
                 }


                     ?>



                 <html>
                 <head>
                 	<title>Student Count</title>
                     <link rel="stylesheet" type="text/css" href="css/studentCount.css" />

                 <script>
                         function goBack() {
                             window.history.back()
                         }

                         function checkfields(){
                             var name = document.getElementById('select_table').value;


                             if (name ==''){
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

                 	<form action="studentCount2.php" method="POST" class="studentcount" onsubmit="return checkfields();">
                 		<div>
                 			<label>Select class</label><br>
                             <select class="dropdown" name="select_table" id="select_table" required>
                                 <option value="" disabled selected >-</option>
                                 <option value="physics_2018t">Physics_2018T</option>
                                 <option value="physics_2019t">Physics_2019T</option>
                                 <option value="physics_2018r">Physics_2018R</option>
                                 <option value="chemistry_2018t">Chemistry_2018T</option>
                                 <option value="chemistry_2018t">Chemistry_2018T</option>
                             </select>

                 		</div>

                         <div class="nostudents"><label>No of students</label><br><!--<input type="text" name="output" /> -->
                             <?php echo '<p id="output">class-'.$table.'- '.$out.'</p>'; ?>


                         </div>

                         <button type="reset" value="reset">Clear</button>
                         <input id="submit" type="submit" value="Check" name="submit" />

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
