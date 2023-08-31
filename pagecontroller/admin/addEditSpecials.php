<?php 
if(isset($_GET['asid'])){//getting id
	$offer_id=$specials->find('id',$_GET['asid']);//getting id of speciall and find reords
	$offer=$offer_id->fetch();//fetch records
	$cri=[
		'offer'=>$offer//varibale making
		];
}
else{
	$cri=[];
}

if (isset($_POST['addOffer'])) {//button calling 
		
		if($_POST['name'] == "" || $_POST['description'] == "") echo "<script>alert('Fill in all the forms')</script>";//to fill all the form

		else{//values
			$values = [
				'id' => $_POST['id'],//id values
				'name' => $_POST['name'],//name values
				'description' => $_POST['description'],//desciption vlue
				'offer_starting' => $_POST['offer_starting'],
				'offer_ending'=> $_POST['offer_ending']//ending values
			];

			$check = $specials->save($values, 'id');//check id

			if ($_FILES['special_img']['error'] == 0) {//error
			
			$fileName =$specials->imageUpload().'.jpg';//uplaod image
			move_uploaded_file($_FILES['special_img']['tmp_name'], '../../images/Specialoffer/' . $fileName);//lacaiton
				}

			if($check == true){//check conditon 
				echo '<script>
					 alert("auction session made");
					 document.location="specials";
					 </script>';
			}else{
				echo '<script>
					 alert("auction session couldnot made");
					 </script>';
			}
		}
}

//deleting offers
if (isset($_GET['dsid'])) {//getting id
	if($specials->delete('id',$_GET['dsid']))//conditon to get id
	{
		echo '<script>
				alert("Offers Deleted");
				document.location = "specials";
				</script>';
	}
}
$title='Add/Edit Offers';//setting title

$content=loadTemplate("../../view/admin/addEditSpecials_view.php",$cri);//loading template
 ?>
