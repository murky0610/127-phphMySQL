<?php 
	require_once "../register/config.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>mmlp</title>
	<link rel="stylesheet" type="text/css" href="../css/raya.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
</head>
    
<body>
	<header id="top_header" class="clearfix">
		<div class="wrapper">
			<h1 class="logo"> <img src="../images/MMLP.png" class="logo" style="width:25px;height:25px;margin-right: 5px"> <a href="../index.php">MMLP</a>   </h1>
			<nav id="main_nav">
                <a href="../booking/booking.php">Book Now!</a>
                <a href="../user_settings.php">User</a>
				<a href="../movies.php">Movies</a>
				<a href="../faq.php">FAQ</a>
			</nav>
		</div>
	</header>

    
	<section id="banner" class="clearfix">
		<div id="banner_content_wrapper">
			<div id="poster">
				<img src="../images/movies/raya.jpg" alt="Deadpool Movie Poster" class="featured_image">
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
				
				<a href="../booking/booking.php">	<button class="btn btn-slide-left">Book Now!</button></a>
			</div>
			<div id="content">
              
				<h2 class="title" >Raya and The Last Dragon</h2>
				<div class="ratings">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star inactive"></i>
				</div>

				<p class="description">Raya, a warrior, sets out to track down Sisu, a dragon,
                 who transferred all her powers into a magical gem which is now scattered all 
                 over the kingdom of Kumandra, dividing its people.</p>

				<p class="info">PG <span>|</span> 2 hours <span>|</span> Action | Anime | Adventure <span>|</span> June 19, 2021</p>
				 
                
                <iframe width="553" height="280" src="https://www.youtube.com/embed/1VIZ89FEjYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
            

			</div>
		</div>
	</section>
	


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