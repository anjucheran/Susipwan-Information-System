<?php
include("php/db_members.php");

$error = '';
if(isset($_POST['login']))
{

$username =  mysqli_real_escape_string($conn,trim($_POST['username']));
$password =  mysqli_real_escape_string($conn,$_POST['password']);

if($username=='' || $password=='')
{
$error='All fields are required';
}

$sql = "select * from members where member_name='".$username."' and member_password = '".md5($password)."'";
//echo $sql;
$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['username']=$res['member_name'];
$_SESSION['uid']=$res['member_id'];
//$_SESSION['name']=$res['name'];
if($res['member_id']==1){
  echo '<script type="text/javascript">window.location="index.php"; </script>';

}else
if($res['member_id']==2){
  echo '<script type="text/javascript">window.location="home.php"; </script>';

}else
if($res['member_id']==3){
  echo '<script type="text/javascript">window.location="home_owner.php"; </script>';

}

}else
{
$error = 'Invalid Username or Password';
}

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
							  <h3 class="myhead">SUSIPWAN Classes</h3>
                                <form role="form" action="login1.php" method="post">
                                    <hr />
									<?php
									if($error!='')
									{
									echo '<h5 class="text-danger text-center">'.$error.'</h5>';
									}
									?>


                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="username" required />
                                        </div>

									<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" name="password" required />
                                        </div>

                                    <div class="form-group">

                                            <span class="pull-right">
                                                   <a href="index1.php" >Forget password ? </a>
                                            </span>
                                     </div>

                                     <button class="btn btn-primary" type= "submit" name="login">Login Now</button>
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
