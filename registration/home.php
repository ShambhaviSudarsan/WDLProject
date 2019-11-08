<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Rental Management System</title>
  <link rel="stylesheet" type="text/css" href="css/homestyle.css">

</head>
<body>
	
	<!-- navbar-->
	<div class="container">

			<header>
				<h2><a href="home.php"><i class="ion-home"></i> Rentit</a></h2>
				<nav>
					<ul>
					<li>
						<a href="login.php" title="Hotels">Login</a>
					</li>
					<li>
						<a href="register.php" title="Flights">Sign Up</a>
					</li>
				</nav>
			</header>

			<div class="cover">
				<h1>Search for rentals in your preferred location.</h1>
				<form  class="flex-form" action="search.php" method="post">
					<label for="from">
					<i class="ion-location"></i>
					</label>
					<input type="text" name="city" placeholder="Where do you want to rent?">
					<input type="submit" name="search" value="submit">
				</form>
			</div>

	</div>


</body>
</html>