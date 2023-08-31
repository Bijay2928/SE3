<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../css/style.css"/>
		
		<title><?php echo $title; ?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Active Hours:</h3>
				<p>All Day: 09:00-10</p>
				
			</aside>
			<h1>Fotheby's International Auction House</h1>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="../home">Home</a></li>
			<li><a href="../furniture">Our Furniture</a></li>
			<li><a href="../about">About Us</a></li>
			<li><a href="../faq">FAQs</a></li>
			<li><a href="admin_home">Admin Home</a></li>

			<?php if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
			?>
			<li><a href="logout">Log Out</a></li>
		<?php } else { ?>
			<li><a href="../login">Log in</a></li>
		<?php } ?>
		</ul>

	</nav>
<img src="../../images/randombanner.php"/>


<main class="admin">
	<?php if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) { ?>
	<section class="left">
		<ul>
			<li><a href="categories">Manage Auction</a></li>
			<li><a href="furnitures">Manage Paintings</a></li>
			<li><a href="drawings">Manage Drawings</a></li>
			<li><a href="photographs">Manage Photographic Images</a></li>
			<li><a href="sculptures">Manage Sculptures</a></li>
			<li><a href="carvings">Manage Carvings</a></li>
			
			<li><a href="specials">manage Auction Session</a></li>
			<li><a href="enquiries">Manage bids</a></li>

			<?php if ($_SESSION['type']=='super') {
			echo '<li><a href="staff">Manage clients</a></li>';
			} ?>
		</ul>
	</section>
<?php } ?>
		<?php echo $content; ?>

</main>

	

	<footer>
		&copy; Fotheby's International House <?php echo 	Date('Y') ; ?>
	</footer>
</body>
</html>