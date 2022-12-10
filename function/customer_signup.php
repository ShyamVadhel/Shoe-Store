<?php

	include('../database/dbconn.php');
	if (isset($_POST['user_signup']))
{
	$firstname=$_POST['firstname'];
	$mi=$_POST['mi'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$zipcode=$_POST['zipcode'];	
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query = $con->query("SELECT * FROM `customer` WHERE `email` = '$email'");
	$check = $query->num_rows;
		if($check == 1)
			{
				echo "<script>alert('EMAIL ALREADY EXIST')</script>";	 
			}
		else
			{
			$con->query ("INSERT INTO customer (firstname, mi, lastname, address, country, zipcode, mobile, email, password)
			VALUES ('$firstname', '$mi', '$lastname', '$address', '$country', '$zipcode', '$mobile', '$email', '$password')") or die(mysqli_error());	
				}				
					
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="images/logo.jpg" />
  <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel = "stylesheet" type = "text/css" href="c../ss/style1.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	<script src="../js/bootstrap.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>

  

  <header>
	
  <div id="header">
		<img src="../img/logo.jpg">
		<label>Shoe Store</label>
			<ul>
			<!-- 	<li><a href="customer_signup.php">Sign Up</a></li> -->
				<li><a href="../home.php">Home</a></li>
			</ul>
	</div>
    
    </header>
<div id="content">  
  <form method="post" class="well">
      <center>
        <legend>Sign Up</legend>
          <table>
            
            <tr>
              Firstname: 
              <input type="text" name="firstname" placeholder="Enter Your First Name" style="width:200px;" required="">
            </tr>
            <br>

            <tr>
              Middlename: <input type="text" name="mi" placeholder=" Enter Your Middle Name" style="width:200px;" required="">
            </tr>
            <br>

            <tr>
              Lasrname: <input type="text" name="lastname" placeholder=" Enter Your Last Name" style="width:200px;" required="">
            </tr>
            <br>

            <tr>
              Country: <input type="text" name="country" placeholder=" Enter Your Country" style="width:200px;" required="">
            </tr>
            <br>

            <tr>
              Zipcode: 
              <input type="text" name="zipcode" placeholder="Enter Your Zipcode" style="width:200px;" required="">
            </tr>
            <br>

            <tr>
              Mobile: 
              <input type="number" name="mobile" placeholder="Enter Your Mobile Number" style="width:200px;" required="">
            </tr>
            <br>

            <tr>
              Email: 
              <input type="text" name="email" placeholder="Enter Your Email Address" style="width:200px;" required="">
            </tr>
            <br>

            <tr>
              Password: <input type="password" name="password" placeholder=" Enter Password" style="width:200px;" required="">
            </tr>
            <br>
            <br>
              <input type="submit" name="user_signup" value="SignUp" class="btn btn-primary" style="width:200px;">
              <br>
              <br>
              <p>Already have an account?<a class="ridge" href="login.php">Login here!</a></p>
          </table>
      </center>
    </form>
     <!--  <div class="col-md-6 offset-md-3">
        <br><h2 style="text-align:center;">SignUp Here..</h2>
      <form method="POST">
         <div class="form-group">
         <label>Firstname:</label>
         <input class="form-control" type="text" name="firstname" placeholder="Enter Your First Name" required="">
       </div>
         <div class="form-group">
         <label>Middelname:</label>
         <input class="form-control" type="text" name="mi" placeholder="Enter Your Middel Name" required="">
       </div>
       <div class="form-group">
         <label>Lastname:</label>
         <input class="form-control" type="text" name="lastname" placeholder="Enter Your Last Name" required="">
       </div>
        <div class="form-group">
         <label>Address:</label>
         <input class="form-control" type="text"name="address" placeholder="Enter Your Address" required="">
       </div>

       <div class="form-group">
         <label>Country:</label>
         <input class="form-control" type="text" name="country" placeholder="Enter Your country" required="">
       </div>
        <div class="form-group">
         <label>Zipcode:</label>
         <input class="form-control" type="zipcode" name="zipcode" placeholder="Enter Your Zipcode" required="">
       </div>

       <div class="form-group">
         <label>Mobile:</label>
         <input class="form-control" type="number" name="mobile" placeholder="Enter Your Mobile" required="">
       </div>
       <div class="form-group">
         <label>Email:</label>
         <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required="">
       </div>

       <div class="form-group">
         <label>Password:</label>
         <input class="form-control" type="password" name="password" placeholder="Enter Your Password" required="">
       </div>
       <br>
       <button type="submit" name="user_signup" class="btn btn-success">SignUP</button>
      
       <a href="change-password.php">Change Password? </a><br>
       <br>Already have an account?<a class="ridge" href="login.php">Login here!</a>
     </form> -->
     </div>
</body>
  <br>
  <br>
</html>