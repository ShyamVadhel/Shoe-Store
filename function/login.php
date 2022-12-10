<?php

include('../database/dbconn.php');

if (isset($_POST['login']))

	{
		$email=$_POST['email'];
		$password=$_POST['password'];

		
			$result=$con->query("SELECT * FROM customer WHERE email='$email' AND password='$password' ")
				or die ('cannot login' . mysqli_error());
			$row=$result->fetch_array  ();
			$run_num_rows = $result->num_rows;
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['id'] = $row['customerid'];
							header ("location:home.php");
						}
						
						else
						{
							echo "<script>alert('Invalid Email or Password')</script>";
							header("location:../shoestore/home.php");
						}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="../img/logo.jpg">
		<label>Shoe Store</label>
			<ul>
				<!-- <li><a href="customer_signup.php">SignUp</a></li> -->
				<li><a href="../home.php">Home</a></li>
			</ul>
	</div>

	<div id="admin">
		<form method="post" class="well">
			<center>
				<legend>Login</legend>
					<table>
						<tr>
							Email:    <input type="text" name="email" placeholder="Username">
						</tr>
						<br>
						<tr>
							Password: <input type="password" name="password" placeholder="Password">
						</tr>
						<br>
						<br>
							<input type="submit" name="login" value="Login" class="btn btn-primary" style="width:200px;">
						<br>
						<br>
						<p>Don't have an account?<a class="ridge" href="customer_signup.php">SignUp here!</a></p>
					</table>
			</center>
		</form>
	</div>




</div>

</body>
</html>
