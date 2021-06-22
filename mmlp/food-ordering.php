<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: register/login.php");
    exit;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Order Food!</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles_food.css">
</head>
    
<body>
	<header id="top_header" class="clearfix">
		<div class="wrapper">
			<h1 class="logo"> <img src="images/MMLP.png" class="logo" style="width:25px;height:25px;margin-right: 5px"> <a href="index.php">MMLP</a>   </h1>
			<nav id="main_nav">
                <a href="booking/booking.php">Book Now!</a>
                <a href="user_settings.php">User</a>
				<a href="movies.php">Movies</a>
				<a href="#">FAQ</a>
			</nav>
		</div>
	</header>
		
	<section id="top_movies" class="clearfix">
		<div class="wrapper">
			<header class="clearfix">
				<h2> Featured Food Menu: </h2>
			</header>

			<div class="row_1">
				<div class="post">
					<img src="images/food/french_fries.jpg" alt="french_fries">
					<h3 class="title">French Fries (₱ 50) </h3>
					<p class="post_info">Salted and seasoned delicious fries. Good for 1.</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div>

			<div class="row_1">
				<div class="post">
					<img src="images/food/popcorn.jpg" alt="popcorn">
					<h3 class="title">Popcorn (₱ 40)</h3>
					<p class="post_info">Kernels popped to perfection. Good for 1.</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div>

			<div class="row_1">
				<div class="post">
					<img src="images/food/cheeseburger.jpg" alt="cheeseburger">
					<h3 class="title">Cheesburger (₱ 120)</h3>
					<p class="post_info">Toasted buns with a slice of cheese and a beef patty grilled to perfection.</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div>

			<div class="row_1">
				<div class="post">
					<img src="images/food/potato_wedges.jpg" alt="Potato Wedges">
					<h3 class="title">Potato Wedges (₱ 70)</h3>
					<p class="post_info">Thicc Potatoes</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div>

			
		</div>
	</section>
    
    <section id="top_movies" class="clearfix">
        <div class="wrapper">
            
            <div class="row_2">
				<div class="post">
					<img src="images/food/nachos.jpg" alt="Nachos">
					<h3 class="title">Nachos (₱ 80)</h3>
					<p class="post_info">Crunchy corn with cream and custard.</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div>

			<div class="row_2">
				<div class="post">
					<img src="images/food/soft_drinks.jpg" alt="The Avengers">
					<h3 class="title">Soft Drinks (₱ 30)</h3>
					<p class="post_info">175 ml</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div>
            
            <div class="row_2">
				<div class="post">
					<img src="images/food/water.jpg" alt="water">
					<h3 class="title">Water (₱ 20)</h3>
					<p class="post_info">175 ml</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
            </div>
        </div>
	</section> 
    
    <div class="order">
        <h2>ORDER LIST:</h2>
        <p></p>
        <div class="order_form">
            <button class="button">Pay</button>
        </div>
    </div>


	<footer id="main_footer">
		<p class="logo">MMLP</p>
		<p class="copyright">&copy;2021 Movies &amp; Stuff. All Rights Reserved.</p>
		<div class="links">
            <a href="#">About Us</a>
			<a href="#">Terms of Service</a>
			<a href="#">Privacy Policy</a>
		</div>
	</footer>
</body>
</html>