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
    

if(isset($_POST['ticket_submit']))
{
	if(!empty($_POST['fries_id'])) 
        {
          	$fries = $_POST['fries_id'];
          echo $fries.' Fries';
        } else {
        	$fries = 0;
          echo $fries.' Fries';
		}

	if(!empty($_POST['popcorn_id'])) 
        {
          	$popcorn = $_POST['popcorn_id'];
          echo $popcorn.' Popcorn';
        } else {
        	$popcorn = 0;
          echo $popcorn.' Popcorn';
		}

	if(!empty($_POST['nachos_id'])) 
        {
          	$nachos = $_POST['nachos_id'];
          echo $nachos.' Nachos';
        } else {
          	$nachos = 0;
          echo $nachos.' Nachos';
		}

	if(!empty($_POST['softdrinks_id'])) 
        {
          	$softdrinks = $_POST['softdrinks_id'];
          echo $softdrinks.' Softdrinks';
        } else {
        	$softdrinks = 0;
          echo $softdrinks.' Softdrinks';
		}

	if(!empty($_POST['water_id'])) 
        {
          	$water = $_POST['water_id'];
          echo $water.' Water';
        } else {
        	$water = 0;
          echo $water.' Water';
		}

  	$ticket_id = $_POST['ticket_id'];

  	$fries_price = $fries * 50;
  	$popcorn_price = $popcorn * 40;
  	$nachos_price = $nachos * 80;
  	$softdrinks_price = $softdrinks * 40;
  	$water_price = $water * 20;

	$result = mysqli_query($link, "SELECT * FROM food WHERE ticket_id = $ticket_id ");

	$num_rows = mysqli_num_rows($result);

	if ($num_rows > 0) {
		$sql = "UPDATE food SET num_fries = '$fries', fries_price = '$fries_price', popcorn_price = '$popcorn_price', num_popcorn = '$popcorn', nachos_price = '$nachos_price', num_nachos = '$nachos', softdrinks_price = '$softdrinks_price', num_softdrinks = '$softdrinks', water_price = '$water_price', num_water = '$water' WHERE ticket_id = '$ticket_id'";

		if(mysqli_query($link, $sql)){
				// success
				header('Location: food-ordering.php');
			} else {
				echo 'query error: '. mysqli_error($link);
			}

	} else {

		$sql = "INSERT INTO food(fries_price, num_fries, popcorn_price, num_popcorn, nachos_price, num_nachos, softdrinks_price, num_softdrinks, water_price, num_water, ticket_id) VALUES('$fries_price', '$fries', '$popcorn_price', '$popcorn', '$nachos_price', '$nachos', '$softdrinks_price', '$softdrinks', '$water_price', '$water', '$ticket_id')";

			if(mysqli_query($link, $sql)){
				// success
				header('Location: food-ordering.php');
			} else {
				echo 'query error: '. mysqli_error($link);
			}
	}

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


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 

			  	<select name="fries_id">
			    <?php
					$fries_num = 0;
			        while($fries_num < 11)
			        {
			            echo "<option value='". $fries_num ."'>" .$fries_num ."</option>";  // displaying data in option menu
			            $fries_num++;
			        }

			        mysqli_free_result($result);
			    ?>
   	
			 	 </select>
			  			

				</div>
			</div>


			<div class="row_1">
				<div class="post">
					<img src="images/food/popcorn.jpg" alt="popcorn">
					<h3 class="title">Popcorn (₱ 40)</h3>
					<p class="post_info">Kernels popped to perfection. Good for 1.</p>

				<select name="popcorn_id">
			   
			    <?php
					$popcorn_num = 0;
			        while($popcorn_num < 11)
			        {
			            echo "<option value='". $popcorn_num ."'>" .$popcorn_num ."</option>";  // displaying data in option menu
			            $popcorn_num++;
			        }

			        mysqli_free_result($result);
			    ?>
   	
			 	 </select>

				</div>
			</div>

		<!-- 	<div class="row_1">
				<div class="post">
					<img src="images/food/cheeseburger.jpg" alt="cheeseburger">
					<h3 class="title">Cheesburger (₱ 120)</h3>
					<p class="post_info">Toasted buns with a slice of cheese and a beef patty grilled to perfection.</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div> -->

			<!-- <div class="row_1">
				<div class="post">
					<img src="images/food/potato_wedges.jpg" alt="Potato Wedges">
					<h3 class="title">Potato Wedges (₱ 70)</h3>
					<p class="post_info">Thicc Potatoes</p>
                    <button class="button">+</button>
                    <button class="button">-</button>
				</div>
			</div> -->

			
		</div>
	</section>
    
    <section id="top_movies" class="clearfix">
        <div class="wrapper">
            
            <div class="row_2">
				<div class="post">
					<img src="images/food/nachos.jpg" alt="Nachos">
					<h3 class="title">Nachos (₱ 80)</h3>
					<p class="post_info">Crunchy corn with cream and custard.</p>
                    	
                    <select name="nachos_id">
			  
			    		<?php
							$nachos_num = 0;
					        while($nachos_num < 11)
					        {
					            echo "<option value='". $nachos_num ."'>" .$nachos_num ."</option>";  // displaying data in option menu
					            $nachos_num++;
					        }

					        mysqli_free_result($result);
					    ?>
   	
			 	 	</select>

				</div>
			</div>

			<div class="row_2">
				<div class="post">
					<img src="images/food/soft_drinks.jpg" alt="The Avengers">
					<h3 class="title">Soft Drinks (₱ 30)</h3>
					<p class="post_info">175 ml</p>
	                	<select name="softdrinks_id">
				 
						    <?php
								$softdrinks_num = 0;
						        while($softdrinks_num < 11)
						        {
						            echo "<option value='". $softdrinks_num ."'>" .$softdrinks_num ."</option>";  // displaying data in option menu
						            $softdrinks_num++;
						        }

						        mysqli_free_result($result);
						    ?>
	   	
				 	 	</select>
				</div>
			</div>
            
            <div class="row_2">
				<div class="post">
					<img src="images/food/water.jpg" alt="water">
					<h3 class="title">Water (₱ 20)</h3>
					<p class="post_info">175 ml</p>
                    	<select name="water_id">
				  
						    <?php
								$water_num = 0;
						        while($water_num < 11)
						        {
						            echo "<option value='". $water_num ."'>" .$water_num ."</option>";  // displaying data in option menu
						            $water_num++;
						        }

						        mysqli_free_result($result);
						    ?>
	   	
				 	 	</select>
				</div>
            </div>
        </div>
	</section> 
    
    	<div style="margin-left: 3.5em;">
        <h2>ORDER LIST:</h2>

			  Choose ticket ID to include the food order:

			  <select name="ticket_id">
			    <?php

					$tickets = mysqli_query($link, "SELECT ticket_id FROM tickets");
							
			        while($data = mysqli_fetch_array($tickets))
			        {
			            echo "<option value='". $data['ticket_id'] ."'>" .$data['ticket_id'] ."</option>";  
			        }

			        mysqli_free_result($result);
			    ?>
   
			  </select>
			  	 <button type="submit" type="input" name="ticket_submit" class="btn btn-outline-secondary mt-1">Save Changes</button>
</form>
		</div>
		<?php mysqli_close($link); ?>
        

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