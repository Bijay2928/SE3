<?php
$cats=$furniture_cat->findAll();//to find the record
	$cat_details=$cats->fetchAll();//to fetch the record
if(isset($_GET['daid'])){//to get id 
	$allFurnitures=$drawing_table->find('id',$_GET['daid']);//to get id of selected table
	$drawing_detail=$allFurnitures->fetch();//fetch all the records
	
	$cri=[
		'drawing_detail'=>$drawing_detail,//makeing varibale
		'cat_details'=>$cat_details//cat details
		];
}
else{
	$cri=['cat_details'=>$cat_details];//making varibale
}

if(isset($_GET['ddaid'])){//getting button id 
	if($drawing_table->delete('id',$_GET['ddaid']))//getting id to delte
	{//alter message
		echo '<script>
				alert("drawing Deleted");
				document.location = "furnitures";
				</script>';
	}
}
if(isset($_POST['addDrawing']))//getting button name
{
		if($_POST['name'] == "" || $_POST['description'] == "" ||$_POST['price']=="") echo "<script>alert('Fill in all the forms')</script>";//condtion to fill all the form
		else
		{
				//insertng datas
			$entries=[
				'id'=>$_POST['id'],//id 
				'name'=>$_POST['name'],//name insertng
				'description'=>$_POST['description'],//description inserting
				'price'=>$_POST['price'],//price inserting
				'auction_id'=>$_POST['auction_id'],//auciton id inserting
				'dimention'=>$_POST['dimention'],//dimentin insertng
				'frame'=>$_POST['frame'],
				'status'=>$_POST['status']//status inserting
				
			];

			$check = $drawing_table->save($entries,'id');//check

			
		if ($_FILES['img']['error'] == 0) {//error check
		
			$fileName =$drawing_table->imageUpload().'.jpg';//to upload iamge
			move_uploaded_file($_FILES['img']['tmp_name'], '../../images/furniture/' . $fileName);//provinding location
		}
			if($check == true){//checking condition
				echo '
					<script>
					alert("drawing added");
					document.location = "furnitures";
					</script>';
			}else{
				echo '
					<script>
					alert("drawing Not added");
					</script>';
			}
		}
	}


$title='Add/Edit drawing';//setting title
$content=loadTemplate("../../view/admin/add_EditDrawings_view.php", $cri);//loadinng template
?>