<?php
	include('login.php');

	if(isset($_SESSION['login_user'])){
		header("location: admin/index.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login Form</title>

		<!--CSS-->
		<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<img src="../assets/img/Background.png" width="1366px" height="662px" />
		<div id="wrapper">
			<form  action="" method="post" name="login-form" class="login-form">
				<div class="header">
					<h1>Silahkan Login</h1>
				</div>

				<div class="content">
					<input name="username" id="username" type="text" class="input username" placeholder="Username" onfocus="this.value=''" />
					<input name="password" id="password" type="password" class="input password" placeholder="Password" onfocus="this.value=''" />
				</div>

				<div class="footer">
					<input type="submit" name="submit" value="Login" class="button" />
				</div>
			</form>
		</div>

		<!--GRADIENT
		<div class="gradient"></div>
		END GRADIENT-->

	</body>
</html>
