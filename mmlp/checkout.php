<?php
// Initialize the session
session_start();

include "register/config.php";

$id = $_SESSION["id"];	

// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: register/login.php");
    exit;
}
    
	if(!empty($_POST['Paymaya_ID'])){
		$Paymaya = $_POST['Paymaya_ID'];
	}
	if(!empty($_POST['GCash_ID'])){
		$Paymaya = $_POST['GCash_ID'];
	}
	if(!empty($_POST['debit_card_no'])){
		$Paymaya = $_POST['debit_card_no'];
	}
	if(!empty($_POST['credit_card_no'])){
		$Paymaya = $_POST['credit_card_no'];
	}
	if(!empty($_POST['Paypal_ID'])){
		$Paymaya = $_POST['Paypal_ID'];
	}



        ?>
        <!DOCTYPE html>
<html>
<head>

	<title>mmlp</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
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
	<p> Customer ID = </p>
	 <p> Ticket Price: </p>
     <p> Food Price: </p>
	<p> Total : </p>
    <h1> Payment Method: </h1>
	<button> GCASH </button>
	<button> Debit Card </button>
	<button> Credit Card </button>
	<button> Paypal </button>
	<button> Paymaya </button>



   

	<footer id="main_footer">
		<p class="logo">MMLP</p>
		<p class="copyright">&copy;2021 MMLP. All Rights Reserved.</p>
		<div class="links">
            <a href="#">About Us</a>
			<a href="#">Terms of Service</a>
			<a href="#">Privacy Policy</a>
		</div>
	</footer>

</body>
</html>