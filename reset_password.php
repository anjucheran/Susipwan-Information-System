<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "Member");
		$sql = "UPDATE `Member`.`members` SET `member_password` = '" . md5($_POST["member_password"]). "' WHERE `members`.`member_name` = '" . $_GET["name"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";


	}
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
		<!-- GOOGLE FONTS-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


		<style>
		.myhead{
		margin-top:0px;
		margin-bottom:0px;
		text-align:center;
		}
		</style>

		</head>
		<body >
				<div class="container">

						 <div class="row ">

										<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

																<div class="panel-body" style="background-color: #E2E2E2; margin-top:50px; border:solid 3px #0e0e0e;">
																	<h3 class="myhead">Reset Password</h3>
																	  <hr />
<script>
function validate_password_reset() {
	if((document.getElementById("member_password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("member_password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}

	return true;
}
</script>
<form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">

	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>




	<div class="form-group input-group">
		<span class="input-group-addon"><i class="fa fa-unlock"  ></i></span>
		<div><input type="password" name="member_password" id="member_password" placeholder="Your New Password "class="form-control"></div>
	</div>

	<div class="form-group input-group">
		<span class="input-group-addon"><i class="fa fa-check-circle"  ></i></span>
		<div><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password "class="form-control"></div>
	</div>

<style>
	.wrapper {
	  text-align: center;
	  display: inline-block;
	  position: relative;
	  top: 85%;
	  left: 50%;
	}
	</style>

	<div class="wrapper">
  <button class="btn btn-primary" type="submit" name="reset-password" id="reset-password" value="Reset Password" >Reset</button>
  <button class="btn btn-primary" onClick="Javascript:window.location.href = 'login1.php';">Home</button>
</div>



											<br></br>

						    	<div id="footer-sec">
								 	SUSIPWAN Classes | Developed By : <a href="https://github.com/deHasara" target="_blank">cyberX.com</a>
								 </div>


</form>


	                            </div>

	                        </div>


	        </div>
	    </div>

		</body>
		</html>
