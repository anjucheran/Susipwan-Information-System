<?php
 $db = mysqli_connect('localhost','root','','susipwan1')
 or die('Error connecting to MySQL server.');
 $sum = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="teacherHome.css">
  	<link rel="stylesheet" type="text/css" href="financeReport.css">
  	<link rel="shortcut icon" href="favicon.ico" />
	<title>Finance Report</title>
</head>
<body>
	<nav class="navbar navbar-default">
  		<div class="container">
  		  <div class="container-fluid">
  		    <!-- Brand and toggle get grouped for better mobile display -->
  		    <div class="navbar-header">
  		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  		        <span class="sr-only">Toggle navigation</span>
  		        <span class="icon-bar"></span>
  		        <span class="icon-bar"></span>
  		        <span class="icon-bar"></span>
  		      </button>
  		      <a class="navbar-brand" href="ownerHome.html"><img src="Susipwan.png" class="backLogo"></a>
  		    </div>

  		    <!-- Collect the nav links, forms, and other content for toggling -->
  		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  		      <ul class="nav navbar-nav">
  		        <li><a href="ownerHome.html">Home<span class="sr-only">(current)</span></a></li>
  		        <li><a href="#">Search</a></li>
  		        <li><a href="#">Emergency</a></li>
  		      </ul>
  		      <ul class="nav navbar-nav navbar-right">
              <li><a type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Teacher <img id="userimg" src="Teachermale.png" alt="user"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Profile</a></li>
                  <li><a href="#"><i class="fa fa-key" aria-hidden="true"></i>Change Password</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="index.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                </ul>
              </li>
  		      </ul>
  		    </div><!-- /.navbar-collapse -->
  		  </div><!-- /.container-fluid -->
  		</div>
  	</nav>

  	<div class="container">
  		<div class="container report">
        <form action="financeReport.php" method="POST">
          <h1 id="heading">Monthly Finance Report - <select id="month" name="month" method="POST">
              <option><?php
                if(isset($_REQUEST["get"])){
                  echo $_POST["month"];
                } else {
                  echo 'January';
                }
              ?></option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
            <input class="btn btn-default" type="submit" id="get" name="get">
          </h1>
        </form>

  			<hr>
        <?php
  if(isset($_REQUEST["get"])) {
    $month = $_POST["month"];
    $query = "SELECT * FROM class";
    mysqli_query($db, $query) or die('Error querying database.');


    $result = mysqli_query($db, $query);
    $sum = 0;

    while ($row = mysqli_fetch_array($result)) {
      $class_name = 'class00'.$row['class_name'];
      $fee = $row['fee'];
      $query1 = "SELECT * FROM $class_name";
      mysqli_query($db, $query1) or die('Error querying database.');
      $result1 = mysqli_query($db, $query1);
      $sum1 = 0;
      while($row1 = mysqli_fetch_array($result1)){
        $sum1 = $sum1 + $row1[$month]*$fee;
      }
      $sum = $sum + $sum1;
      echo '<div class="row">
              <div class="container">
                <div class="col-md-6 first"><p>'.$class_name.'</p></div>
                <div class="col-md-6"><p>'.$sum1.'</p></div>
              </div>
            </div>';
    }
  }
?>
          <div class="row">
            <div class="container">
              <div class="col-md-4 first"></div>
              <div class="col-md-4 second"><hr id="sum"></div>
              <div class="col-md-4"></div>
            </div>
          </div>
          <div class="row">
            <div class="container">
              <div class="col-md-6 first">Total Income</div>
              <div class="col-md-6"><p><?php
                echo $sum;
              ?></p></div>
            </div>
          </div>
  		</div>
  	</div>

  	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
