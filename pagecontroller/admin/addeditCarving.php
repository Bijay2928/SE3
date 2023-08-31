<?php
$cats=$furniture_cat->findAll();//to find all the records
	$cat_details=$cats->fetchAll();//fetching records
if(isset($_GET['caid'])){//to get the id of selected id
	$allFurnitures=$carving_table->find('id',$_GET['caid']);//finding records
	$carving_detail=$allFurnitures->fetch();//fetching deails
	
	$cri=[//making carving_details variable
		'carving_detail'=>$carving_detail,
		'cat_details'=>$cat_details
		];
}
else{//else condition for cat_details
	$cri=['cat_details'=>$cat_details];
}

if(isset($_GET['dcaid'])){//getting id of button
	if($carving_table->delete('id',$_GET['dcaid']))//getting id
	{//alert by giving message
		echo '<script>
				alert("carving Deleted");
				document.location = "furnitures";
				</script>';
	}
}
if(isset($_POST['addCarving']))//getting button call
{
		if($_POST['name'] == "" || $_POST['description'] == "" ||$_POST['price']=="") echo "<script>alert('Fill in all the forms')</script>";//condtion to fill all the form
		else
		{
					//else condtion to inerst the datebase.
			$entries=[
				'id'=>$_POST['id'],//insert id
				'name'=>$_POST['name'],//insert name
				'description'=>$_POST['description'],//insert description
				'price'=>$_POST['price'],//insert price
				'auction_id'=>$_POST['auction_id'],//insert auction id
				'dimention'=>$_POST['dimention'],//insert dimention
				'material'=>$_POST['material'],// insert material
				'status'=>$_POST['status'],//insert status
				'weight'=>$_POST['weight']//insert weight
			];

			$check = $carving_table->save($entries,'id');//checking id

			
		if ($_FILES['img']['error'] == 0) {//if condtion for eror 
		
			$fileName =$carving_table->imageUpload().'.jpg';//to upload image
			move_uploaded_file($_FILES['img']['tmp_name'], '../../images/furniture/' . $fileName);//givving location folder to save image
		}
			if($check == true){//check condtion and show alert message
				echo '
					<script>
					alert("carving added");
					document.location = "furnitures";
					</script>';
			}else{
				echo '
					<script>
					alert("carving Not added");
					</script>';
			}
		}
	}


$title='Add/Edit carving';//giving title
$content=loadTemplate("../../view/admin/add_editCarvings_view.php", $cri);//laoading template
?>