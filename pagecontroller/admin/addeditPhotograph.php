<?php
$cats=$furniture_cat->findAll();//to find the records
	$cat_details=$cats->fetchAll();//to fetch the reocords
if(isset($_GET['pid'])){//to get id
	$allFurnitures=$photograph_table->find('id',$_GET['pid']);//get id of table 
	$photograph_detail=$allFurnitures->fetch();//fetch the records
	
	$cri=[//creating vatibale
		'photopgraph_detail'=>$photograph_detail,
		'cat_details'=>$cat_details
		];
}
else{
	$cri=['cat_details'=>$cat_details];//creating varibale
}

if(isset($_GET['dpid'])){//getting id
	if($photograph_table->delete('id',$_GET['dpid']))////geting id
	{//allert message
		echo '<script>
				alert("photograph Deleted");
				document.location = "furnitures";
				</script>';
	}
}
if(isset($_POST['addPhoto']))//gettting button name
{
		if($_POST['name'] == "" || $_POST['description'] == "" ||$_POST['price']=="") echo "<script>alert('Fill in all the forms')</script>";//to fill all the form
		else
		{
				//inserting values
			$entries=[
				'id'=>$_POST['id'],//inserting id
				'name'=>$_POST['name'],
				'description'=>$_POST['description'],//inserting descrupiton
				'price'=>$_POST['price'],
				'auction_id'=>$_POST['auction_id'],//inserting auciton id
				'dimention'=>$_POST['dimention'],//inserting dimention
				'type'=>$_POST['type'],//inserting type
				'status'=>$_POST['status']
				
			];

			$check = $photograph_table->save($entries,'id');//check

			
		if ($_FILES['img']['error'] == 0) {//error
		
			$fileName =$photograph_table->imageUpload().'.jpg';//photo upload
			move_uploaded_file($_FILES['img']['tmp_name'], '../../images/furniture/' . $fileName);//loaction
		}
			if($check == true){//chekc condiotn
				echo '
					<script>
					alert("photograph added");
					document.location = "furnitures";
					</script>';
			}else{
				echo '
					<script>
					alert("photograph Not added");
					</script>';
			}
		}
	}


$title='Add/Edit image';//setitng title
$content=loadTemplate("../../view/admin/add_editPhotographicImage_view.php", $cri);//loading template
?>