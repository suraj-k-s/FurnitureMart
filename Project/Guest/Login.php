<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Assets/Template/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/css/main.css">
<!--===============================================================================================-->
</head>
<?php
session_start();

include("../Assets/Connection/Connection.php");

if(isset($_POST["btnlogin"]))
{
	$email = $_POST["txtemail"];
	$password = $_POST["txtpassword"];
	
	$selQry = "select * from tbl_user where user_email ='".$email."' and user_password='".$password."'";
	$result = $Conn->query($selQry);
	
	
	$selQry1 = "select * from tbl_shop where shop_email ='".$email."' and shop_password='".$password."'";
	$result1 = $Conn->query($selQry1);
	
	
	$selQry2 = "select * from tbl_admin where admin_email ='".$email."' and admin_password='".$password."'";
	$result2 = $Conn->query($selQry2);
	
	
	if($row=$result->fetch_assoc())
	{
		$_SESSION["uid"]=$row["user_id"];
		$_SESSION["uname"]=$row["user_name"];
		header("Location:../User/HomePage.php");
	}
	
	else if($row1=$result1->fetch_assoc())
	{
		$_SESSION["kid"]=$row1["shop_id"];
		$_SESSION["kname"]=$row1["shop_name"];
		header("Location:../Shop/HomePage.php");
	}
	
	else if($row2=$result2->fetch_assoc())
	{
		$_SESSION["aid"]=$row2["admin_id"];
		$_SESSION["aname"]=$row2["admin_name"];
		header("Location:../Admin/HomePage.php");
	}
	
	else
	{
		echo "<script>alert('Invalid Credentials!!!')</script>";
	}
}

?>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('../Assets/Template/Login/images/BG1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					 Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="txtemail" placeholder="Email" autocomplete="off" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="txtpassword" placeholder="Password" pattern="[a-zA-Z0-9+!@#$%^&*]{6,12}" autocomplete="off" required>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
                    <br />
                    <div >
					<a href="RecoveryPassword.php">Forgot Password</a>
                    </div>
                    <div align="right">
					<a href="../index.php">Back To Home</a>
                    </div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="btnlogin">
							Login
						</button>
					</div>
                    
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="../Assets/Template/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Assets/Template/Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/js/main.js"></script>

</body>
</html>