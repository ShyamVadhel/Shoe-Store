<?php
	include("../function/session.php");
	include("../database/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
	<link rel = "stylesheet" stype = "text/css" href="../admin_css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../admin_css/bootstrap.css">
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

	<div id="header" style="position:fixed;">
		<img src="../img/logo.jpg">
		<label>Shoe Store</label>

			<?php
				$id = (int) $_SESSION['id'];

					$query = $con ->query ("SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();

			?>

			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-black"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a><i class="icon-user icon-black"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>

	<br>

	<div id="leftnav">
		<ul>
		<!-- 	<li><a href="admin_home.php" style="color:#333;">Dashboard</a></li> -->
			<li><a href="admin_feature.php">Products</a>
				<ul>
					<li><a href="admin_feature.php "style="font-size:15px; margin-left:15px;">Features</a></li>
					<li><a href="admin_product.php "style="font-size:15px; margin-left:15px;">Sports</a></li>
					<li><a href="admin_causal.php" style="font-size:15px; margin-left:15px;">Casual</a></li>
					<li><a href="admin_customize.php"style="font-size:15px; margin-left:15px;">Customize</a></li>
				</ul>
			</li>
			<li><a href="transaction.php">Transactions</a></li>
			<li><a href="customer.php">Customers</a></li>
			<li><a href="message.php">Messages</a></li>
			<li><a href="order.php">Orders</a></li>
		</ul>
	</div>
	<div id="rightcontent" style="position:absolute; top:10%;">

	<div id="container" style="min-width: 310px; height: 600px; max-width: 1000px; margin: 0 auto; background:none; float:left;"></div>



	</div>

</body>
</html>
