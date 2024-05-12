<?php
include("connection.php");
error_reporting(0);
?>


<html>
<head>
<title>Foodie Restaurant</title>


<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="order.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" href="restaurant/fav1.ico" type="image/ico" size="16*16">
</head>

<body>

<!--code for nav bar -->


<div id="menu">
<ul>
   <li><a href="index.html">Home</a></li>
   <li><a href="about.html">About</a></li>
   <li><a href="#">Menu</a>
    <ul>
	<li><a href="vegthali.html">Veg Thali</a>
	<li><a href="nonvegthali.html">Non Veg Thali</a>
	<li><a href="chaat.html">Chaat</a>
	<li><a href="fastfood.html">Fast Food</a>
	<li><a href="soup.html">Soup</a>
	<li><a href="pasta.html">Pasta</a>
	<li><a href="paratha.html">Paratha</a>
	</ul>
   </li>
   <li><a href="order2.php">Order</a></li>
   <li><a href="contact.html">Contact</a></li>
   <li><a href="account.html">Account</a></li>
</ul>
</div>
<!-- end code for nav bar -->

<br><br><br><br>

<div class="container">

	<form action="" method="POST">

			<div class="row">

					<div class="col">

							<h3 class="title">Billing address</h3>

							<div class="inputBox">
									<span>full name :</span>
									<input type="text" placeholder="john deo" name="fullname">
							</div>
							<div class="inputBox">
									<span>email :</span>
									<input type="email" placeholder="example@example.com" name="email">
							</div>
							<div class="inputBox">
									<span>address :</span>
									<input type="text" placeholder="room - street - locality" name="address">
							</div>
							<div class="inputBox">
									<span>city :</span>
									<input type="text" placeholder="mumbai" name="city">
							</div>

							<div class="flex">
									<div class="inputBox">
											<span>state :</span>
											
											<input type="text" placeholder="india" name="state">
											
									</div>
									<div class="inputBox">
											<span>zip code :</span>
											<input type="text" placeholder="123 456" name="zipcode">
									</div>
							</div>

					</div>

					<div class="col">

							<h3 class="title">payment</h3>

							<div class="inputBox">
									<span>cards accepted :</span>
									<img src="restaurant/card_img.png" alt="">
							</div>
					<div class="inputBox">
					<span>name on card :</span>
					<input type="text" placeholder="mr. john deo" name="nameoncard">
							</div>
							<div class="inputBox">
									<span>credit card number :</span>
									<input type="number" placeholder="1111-2222-3333-4444" name="creditcardno">
							</div>
							<div class="inputBox">
									<span>exp month :</span>
									<input type="text" placeholder="january" name="expmonth">
							</div>

							<div class="flex">
									<div class="inputBox">
											<span>exp year :</span>
											<input type="number" placeholder="2022" name="expyear">
									</div>
									<div class="inputBox">
											<span>CVV :</span>
											<input type="text" placeholder="1234" name="cvv">
									</div>
							</div>

					</div>
	
			</div>

		<input type="submit" value="proceed to checkout" class="submit-btn" name=""submit>

	</form>

</div>    
	


<br>





<!-- code for footer -->
<br>
<div class="footer">
  <div class="footerb">
       <b> Quick Link </b>
	   <br><br><br>
	   Home
	   <br>
	   About
	   <br>
	   Order
	   <br>
	   Contact
  </div>
  
  <div class="footer">
  <div class="footerb">
       <b> Menu </b>
	   <br><br><br>
	   VegThali<br>
	  Non Veg Thali<br>
	  Fast Food<br>
	  Pizza<br>
	  Pasta<br>
  </div>
  
  <div class="footerb">
  <b> Address </b>
	   <br><br><br>
	   Address:<br>
	   144, Katra Sunaran Firozabad<br>
	   Email: ambikaverma2302@gmail.com<br>
	   Mobile: 8445560294<br>
	   Time: 9:00 AM To 5:00 PM<br>
  </div>
  
  <div class="footerb">
  <b> Directions </b>
	   <br><br><br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.3084527180617!2d78.38629307517593!3d27.14658365000139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39744758d8013ad7%3A0x1af658e3453b1d76!2sFirozabad%20Railway%20Station!5e0!3m2!1sen!2sin!4v1691779406201!5m2!1sen!2sin" width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>



<!-- end code for footer -->
</body>
</html>

<?php

if(isset($POST['submit']))
{
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zipcode=$_POST['zipcode'];
	$nameoncard=$_POST['nameoncard'];
	$creditcardno=$_POST['creditcardno'];
	$expmonth=$_POST['expmonth'];
	$expyear=$_POST['expyear'];
	$cvv=$_POST['cvv'];
	
	if($firstname!="" &&  $email!="" && $address="" && $city!="" && $state!="" && $zipcode!="" && $nameoncard!="" && $creditcardno!="" && $expmonth!="" && $expyear!="" && $cvv!="")
	{
	$query="INSERT INTO `order`(`firstname`, `email`, `address`, `city`, `state`, `zipcode`, `nameoncard`, `creditcardno`, `expmonth`, `expyear`, `cvv`) VALUES ('$firstname','$email','$address','$city','$state','$zipcode','$nameoncard','$creditcardno','$expmonth','$expyear','$cvv')";
	$data=mysqli_query($conn,$query);
	
	if($data)
	{
		echo "data insert";
	}
	    }
	else
	{
		echo "failed";
	}
}
?>
	
	
	
	
	
















