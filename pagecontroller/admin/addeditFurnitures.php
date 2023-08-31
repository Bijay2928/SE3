<?php
$cats=$furniture_cat->findAll();//to find thre record
	$cat_details=$cats->fetchAll();//to fetch the record
if(isset($_GET['fid'])){//to get the id
	$allFurnitures=$painting_table->find('id',$_GET['fid']);//to get the id of selected row
	$furniture_detail=$allFurnitures->fetch();//fetch the records.
	
	$cri=[
		'furniture_detail'=>$furniture_detail,//making varibale
		'cat_details'=>$cat_details//making variblae
		];
}
else{
	$cri=['cat_details'=>$cat_details];//making varibale
}

if(isset($_GET['dfid'])){//getting id
	if($painting_table->delete('id',$_GET['dfid']))//detelte selecte reocrd
	{
		echo '<script>
				alert("painting Deleted");
				document.location = "furnitures";
				</script>';
	}
}
if(isset($_POST['addFurniture']))//button name to get
{	
		if($_POST['name'] == "" || $_POST['details'] == "" ||$_POST['price']=="") echo "<script>alert('Fill in all the forms')</script>";//to filll all the form.
		else
		{
				//inserting datas
			$entries=[
				'id'=>$_POST['id'],//id insert
				'painting_name'=>$_POST['painting_name'],//name insert
				'details'=>$_POST['details'],//detail insert
				'price'=>$_POST['price'],
				'name'=>$_POST['name'],//name insert
				'type'=>$_POST['type'],//type insert
				'status'=>$_POST['status'],//status insert
				'frame'=>$_POST['frame']//fruame insert
			];

			$check = $painting_table->save($entries,'id');//check table id

			
		if ($_FILES['img']['error'] == 0) {//error
		
			$fileName =$painting_table->imageUpload().'.jpg';//image upload
			move_uploaded_file($_FILES['img']['tmp_name'], '../../images/furniture/' . $fileName);//image locaiton save
		}
			if($check == true){//chekc conditoion
				echo '
					<script>
					alert("painting added");
					document.location = "furnitures";
					</script>';
			}else{
				echo '
					<script>
					alert("painting Not added");
					</script>';
			}
		}
	}


$title='Add/Edit Category';//setting title
$content=loadTemplate("../../view/admin/addeditFurnitures_view.php", $cri);//loading template
?>