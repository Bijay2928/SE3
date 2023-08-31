<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>all day: 09:00-10</p>
				
			</aside>
			<h1>Fotheby's Auction House</h1>

		</section>
		<form action="search.php" method="POST">
					<div>
						<input type="text" name="search" placeholder="searh.." height="5px" width="5px">
						
							<button class="btn" name="submit" type="submit" width="10px"; height="10px">search</button>
						
					</div>
					
				</form>
	</header>
	<nav>
		<ul>
			<!-- Search Form -->
	
			<li><a href="home">Home</a></li>
			<li><a href="furniture">Our paintings</a></li>
			<li><a href="carving">Our carving</a></li>
			<li><a href="drawing">Our drawing</a></li>
			<li><a href="photograph">Our photograph</a></li>
			<li><a href="sculpture">Our sculpture</a></li>
			<li><a href="about">About Us</a></li>

			
			

			<li><a href="faq">FAQs</a></li>
			<?php if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged']==true)) {
				echo '<li><a href="admin/admin_home">Admin Home</a></li>'; 
				echo '<li><a href="admin/logout">Log Out</a></li>'; 
			}else{
			echo '</li> <li><a href="contact">make a bid</a>
				</li> <li><a href="login">Log In</a>'; }
			?>
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
	
		<?php echo $content;?>

	<footer>
		&copy; Fotheby's International Auction House <?php echo Date('Y'); ?>
	</footer>
</body>
</html>