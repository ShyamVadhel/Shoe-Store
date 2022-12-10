<?php
	include("session.php");
	include("../database/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoe Store</title>
	<link rel="icon" href="../img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel = "stylesheet" type = "text/css" href="../css/style1.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
			$id = (int)$_SESSION['id'];
			$query = $con->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error($con));
			$fetch = $query->fetch_array();
		?>

			<ul>
				<li><a href="logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" data-toggle="modal"><i class="icon-user icon-black"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>
		<nav>
			<a href="home.php"></i>Home</a>
			<a href="product.php">Product</a>
			<a href="aboutus.php">About Us</a>
			<a href="contactus.php">Contact Us</a>
			<a href="#">Privacy Policy</a>
			<a href="#"></i>FAQs</a>
			<div class="animation start-home"></div>
		</nav>
		
<div id="container">
							<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];
							$query = $con->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error($con));
							$fetch = $query->fetch_array();
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="../account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>

	<div id="carousel">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="active item" style="padding:0; border-bottom:0 solid #111;"><img src="../img/shoe1.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="../img/shoe2.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="../img/shoe3.jpg" class="carousel"></div>
			</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
		<br />
</div>
<br />
<br />

			<!-- -- Product show code here -- -->
	<div id="content">
		<div id="product" style="position:relative; margin-top:30%;">
			<h2 style="text-align:center;"><legend>Feature Items</legend></h2>
			<br />
			<br />

		<div id="product">

			<?php
			include ('addcart.php');
			include "../database/dbconn.php";
				$query = $con -> query("SELECT * FROM product WHERE category='feature' ORDER BY product_id DESC") or die (mysqli_error($con));

					while($fetch = $query->fetch_array())
						{

						$pid = $fetch['product_id'];

						$query1 = $con ->query("SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error($con));
						$rows = $query1->fetch_array();

						$qty = $rows['qty'];
						if($qty <= 5){

						}else{
							echo "<div class='float'>";
							echo "<center>";
							echo "<a href='../details.php?id=".$fetch['product_id']."'> <img class='img-polaroid' src='../photo/".$fetch['product_image']."' height = '200px' width = '200px'></a>";
							echo "".$fetch['product_name']."";
							echo "<br />";
							echo "Price ".$fetch['product_price']."";
							echo "<br />";
							echo "<p class='text-info'> Size: ".$fetch['product_size']."<p>";
							echo "</center>";
							echo "</div>";
						}
						}
			?>
		</div>
	</div>
</div>
