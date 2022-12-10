<?php
	//include("function/session.php");
	include("database/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
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
			<?php
				$id = (int) $_SESSION['id'];

					$query = $con->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-black"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile"  data-toggle="modal"><i class="icon-user icon-black"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	<nav>
		<a href="index.php">Home</a>
		<a href="product.php">Product</a> 
		<a href="function/aboutus.php">About Us</a>
		<a href="function/contactus.php">Contact Us</a>
		<a href="#">Privacy Policy</a>
		<a href="#">FAQs</a>
		<div class="animation start-home"></div>
	</nav>
</div>

<div id="container">

		<div class="nav1">
			<ul>
				<li><a href="product2.php">Sport</a></li>
				<li>|</li>
				<li><a href="product1.php">Causal</a></li>
				<li>|</li>
				<li><a href="#">Customize</a></li>
			</ul>

		</div>

	<div id="content">
		<br />
		<br />
		<div id="product">
			<form method="post">

			<?php
				include ('function/addcart.php');

				$query = $con->query("SELECT *FROM product WHERE category='sport' ORDER BY product_id DESC") or die (mysqli_error());

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
							echo "Price ".$fetch['product_price']."";
							echo "<br />";
							echo "<p class='text-info'> Size: ".$fetch['product_size']."</p>";
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
