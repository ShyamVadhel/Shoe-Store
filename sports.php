<?php
	// include("function/session.php");
	include("database/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
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
	</div>
	<br>

	<nav>
		<a href="home.php">Home</a>
		<a href="product1.php">Product</a> 
		<a href="aboutus1.php">About Us</a>
		<a href="contactus1.php">Contact Us</a>
		<a href="#">Privacy Policy</a>
		<a href="#">FAQs</a>
		<div class="animation start-home"></div>
	</nav>

<div id="container">
		<div class="nav1">
			<ul>
				<li><a href="product1.php" class="active">Sport</a></li>
				<li>|</li>
				<li><a href="football1.php">Casual</a></li>
				<li>|</li>
				<li><a href="running1.php">Customize</a></li>
			</ul>
				
		</div>

	<div id="content">
		<br />
		<br />
		<div id="product">
			<form method="post">

			<?php
				include ('addcart.php');

				$query = $con->query("SELECT *FROM product WHERE category='basketball' ORDER BY product_id DESC") or die (mysqli_error());

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
							echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
							echo "".$fetch['product_name']."";
							echo "<br />";
							echo "P ".$fetch['product_price']."";
							echo "<br />";
							echo "<h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'> Size: ".$fetch['product_size']."</h3>";
							echo "</center>";
							echo "</div>";
						}
						}
			?>

			</form>
		</div>

	</div>

	<br />
</div>
	<br />
