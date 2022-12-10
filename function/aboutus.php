<?php
include "session.php";
include "../database/dbconn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel = "stylesheet" type = "text/css" href="../css/style1.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../../js/popover.js"></script>
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
	<img src="../img/about-us.png" style="width:1150px; height:250px; border:1px; ">
	<br />
	<br />

	<legend>About Us</legend>
		<div id="content">
			<legend><h3>Mission</h3></legend>
					<h4 style="text-indent:60px;">To provide a high quality footwear that suit the athletes style and to be one of the leading sports footwear apparel in the country.</h4>
			<br />
				<legend><h3>Vision</h3></legend>
					<h4 style="text-indent:60px;">Online Shoe Store, the company that inspire, motivate, and give determination to the sports enthusiast.</h4>
			<br />

		</div>
	<br />
</div>