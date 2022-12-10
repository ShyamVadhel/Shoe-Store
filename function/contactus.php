<?php
include "session.php";
include "../database/dbconn.php";

if(isset($_POST['send']))
  {
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $query = ("INSERT INTO `contact` (email, message) VALUES ('$email', '$message')") or die (mysqli_error());
    $run = mysqli_query($con, $query);
 
    if($run)
    { 
      echo "Your Message sent Sucessful";
    }
  
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
	<link rel="icon" href="../img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/style1.css" media="all">
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
			<?php
				$id = (int) $_SESSION['id'];

					$query = $con->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>
			<ul>
				<li><a href="logout.php"><i class="icon-off icon-black"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-black"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>

	<nav>
		<a href="home.php">Home</a>
		<a href="product.php">Product</a>
		<a href="aboutus.php">About Us</a>
		<a href="contactus.php">Contact Us</a>
		<a href="#">Privacy Policy</a>
		<a href="#">FAQs</a>
		<div class="animation start-home"></div>
	</nav>
<div id="container">

		<img src="../img/contactus.png" style="width:1150px; height:250px; border:1px; ">
	<br />
	<br />

		<div id="content">
			<form method="post">
				<table style="position:relative; left:25%;">
					<tr>
						<td style="font-size:20px;">Email:</td><td><input type="email" name="email" placeholder="Email" style="width:400px;" required=""></td>
					</tr>
					<tr>
						<td style="font-size:20px;">Message:</td><td><textarea name="message" style="width:400px; height:300px;" required></textarea></td>
					</tr>
					<tr>
						<td></td><td><button class="btn btn-info" name="send" style="width:300px;"><i class="icon icon-ok icon-green"></i>Submit</button>&nbsp;<a href="index.php"><button class="btn btn-danger" style="width:110px;"><i class="icon icon-remove icon-white"></i>Cancel</button></a></td>
					</tr>
				</table>
			</form>
		</div>
		

	<br />
</div>
