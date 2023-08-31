<?php
if (isset($_POST['enquiry_button'])) {//calling button
$entries=[
			//inserting
			'name'=>$_POST['name'],//inserting name
			'email'=>$_POST['email'],//inseting email
			'telephone'=>$_POST['telephone'],//inerting telpone
			'item_name'=>$_POST['painting_name'],//inseritng item name
			'bid'=>$_POST['bid']//inserting bid
		];

		$check = $enquiries->insert($entries);//chech insert
		if($check == true){//check
			echo '
				<script>
				alert("bid made");
				document.location = "contact";
				</script>';
		}else{
			echo '
				<script>
				alert("bid Submitted");
				</script>';
		}
}
 $title = "Contact Us";//setting title
 $content = loadTemplate("../view/user/contact_view.php", []);//loading tempalte
?>

		