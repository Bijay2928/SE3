<?php 
if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {//session ture for login 
			?>
		<section class="right">
			<h2>You are now logged in</h2>
		</section>
		<?php
		}	
		else{
			header('Location:../login');}//header locatin
			?>
	
			