<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ArduinoPage</title>
		<link rel="stylesheet" href="public/libraries/bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="public/libraries/common/css/common.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="public/libraries/bootstrap/js/bootstrap.js"></script>
	</head>

	<body>
		<nav class="navbar py-4 navbar-expand-lg navbar-light ">
		   <div class="container">
				<a class="navbar-brand" href="#">
				  <!--Icon-->
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				 	<span class="navbar-toggler-icon"></span>
				</button>
		  
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  	<ul class="navbar-nav ml-auto">
						<li class="nav-item align-self-center">
						  	<a class="nav-link" href="?module=home">Home</a>
						</li>
						<li class="nav-item align-self-center">
						  	<a class="nav-link" href="?module=produk">Produk</a>
						</li>
						<li class="nav-item align-self-center">
							<a class="nav-link" href="?module=artikel">Artikel</a>
					  	</li>
					  	</li> <li class="nav-item align-self-center">
							<a class="nav-link" href="?module=contact">Kontak</a>
					  	</li>
					  	<li class="nav-item align-self-center">
							<a class="nav-link" href="?module=about">About Us</a>
					  	</li>   
					  
						<a class="btn px-3 btn-secondary ml-5" href="#" role="button">Sign In</a>
						<a class="btn px-3 btn-primary ml-2" href="#" role="button">Sign Up</a>
				  	</ul>
				</div>
		   </div>
	  	</nav>

		<section class="hero mt-5">
			<div class="container">
			   <?php include "content.php"; ?>
			</div>
		</section>
	  
		<footer>
		 	<div id="footer">
			 	<small>Copyright &copy; by 18111205_Joko Nugroho_TIFRM18CIDA</small>
		  	</div>
		</footer>

		<script type="text/javascript">
		  
		</script>
	</body>
</html>