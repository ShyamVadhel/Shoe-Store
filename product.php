<?php
// include "function/session.php";
include "database/dbconn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="admin_css/style.css" media="all">
	<link rel = "stylesheet" type = "text/css" href="css/style1.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logo.jpg">
		<label>Shoe Store</label>
			<ul>
				<li><a href="function/customer_signup.php" data-toggle="modal">Sign Up</a></li>
				<li><a href="function/login.php" data-toggle="modal">Login</a></li>
			</ul>
	</div>
	
	<br>

	<nav>
		<a href="index.php">Home</a>
		<a href="product.php">Product</a> 
		<a href="function/aboutus.php">About Us</a>
		<a href="function/contactus.php">Contact Us</a>
		<a href="#">Privacy Policy</a>
		<a href="#">FAQs</a>
		<div class="animation start-home"></div>
	</nav>
<div id="container">

 	<div class="nav1">
		<ul>
			<li><a href="product2.php" action="active">Sport</a></li>
			<li>|</li>
			<li><a href="product1.php">Causal</a></li>
			<li>|</li>
			<li><a href="function/login.php">Customize</a></li>
		</ul>
		
	</div>

<div id="content">
		<br />
		<br />

		<div id="product">

			<?php
			include ('function/addcart.php');
			include 'database/dbconn.php';

				$query = $con->query("SELECT *FROM product WHERE category='feature' ORDER BY product_id DESC") or die (mysqli_error());

					while($fetch = $query->fetch_array())
						{

						$pid = $fetch['product_id'];

						$query1 = $con->query("SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
						$rows = $query1->fetch_array();

						$qty = $rows['qty'];
						if($qty <= 5){

						}else{
							echo "<div class='float'>";
							echo "<center>";
							echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '400px' width = '200px'></a>";
							echo "".$fetch['product_name']."";
							echo "<br />";
							echo "Price ".$fetch['product_price']."";
							echo "<br />";
							echo " Size: ".$fetch['product_size']."";
							echo "</center>";
							echo "</div>";
						}

						}
			?>
		</div>
	</div>
</div>
