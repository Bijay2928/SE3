<?php
$cats=$furniture_cat->findAll();//to find the reocrds
	$cat_details=$cats->fetchAll();//to fetch the reocrds
if(isset($_GET['said'])){//to get id
	$allFurnitures=$sculpture_table->find('id',$_GET['said']);//to get id of selected table
	$sculpture_detail=$allFurnitures->fetch();//to fetch reocrds
	
	$cri=[//making varibales
		'sculpture_detail'=>$sculpture_detail,
		'cat_details'=>$cat_details
		];
}
else{//makiing varibalers
	$cri=['cat_details'=>$cat_details];
}

if(isset($_GET['dsaid'])){//get id
	if($sculpture_table->delete('id',$_GET['dsaid']))//get id of selected table
	{
		echo '<script>
				alert("sculpture Deleted");
				document.location = "furnitures";
				</script>';
	}
}
if(isset($_POST['addSculpture']))//get button name
{
		if($_POST['name'] == "" || $_POST['description'] == "" ||$_POST['price']=="") echo "<script>alert('Fill in all the forms')</script>";//to fill all the form
		else
		{
				//inserting datas
			$entries=[
				'id'=>$_POST['id'],//inert id
				'name'=>$_POST['name'],
				'description'=>$_POST['description'],//insert description
				'price'=>$_POST['price'],
				'auction_id'=>$_POST['auction_id'],//insert auiton id
				'dimention'=>$_POST['dimention'],//inserting dimention
				'material'=>$_POST['material'],
				'status'=>$_POST['status'],
				'weight'=>$_POST['weight']//inserting weight
			];

			$check = $sculpture_table->save($entries,'id');//checkinf id

			
		if ($_FILES['img']['error'] == 0) {//error
		
			$fileName =$sculpture_table->imageUpload().'.jpg';//upload image
			move_uploaded_file($_FILES['img']['tmp_name'], '../../images/furniture/' . $fileName);//location
		}
			if($check == true){//chekc
				echo '
					<script>
					alert("sculpture added");
					document.location = "furnitures";
					</script>';
			}else{
				echo '
					<script>
					alert("sculpture Not added");
					</script>';
			}
		}
	}


$title='Add/Edit sculpture';//setting title
$content=loadTemplate("../../view/admin/add_editSculpture_view.php", $cri);//loading template
?>