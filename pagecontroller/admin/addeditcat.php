<?php
if(isset($_GET['cid'])){//getting id 
	$allcats=$furniture_cat->find('id',$_GET['cid']);//getting button id
	$cat_detail=$allcats->fetch();//fetch records
	$cri=[
		'cat_detail'=>$cat_detail//making cat_detail variable
		];
}
else{//else conditon
	$cri=[];
}

if(isset($_GET['dcid'])){//getting id 
	if($furniture_cat->delete('id',$_GET['dcid']))//get id to delete the selected row
	
		header('Location:categories');//header location

}
if(isset($_POST['addcat']))//if conciton
{

	//to chekc if datta was interted.
	if($_POST['name'] == "" ) echo "<h2>Fill in the name</h2>";//for the name
		
else{//else for inserting
		$entries=[
			'id'=>$_POST['id'],//for id
			'name'=>$_POST['name'],//for name
			'lotNumber'=>$_POST['lotNumber']
		];
		$check = $furniture_cat->save($entries,'id');//check id
		if($check == true){//if condition
			echo '
				<script>
				alert("auction Saved");
				document.location = "categories";
				</script>';
		}else{
			echo '
				<script>
				alert("auction Not Saved");
				</script>';
		}
	}
}



$title='Add/Edit Category';//setting title
$content=loadTemplate("../../view/admin/addeditcat_view.php", $cri);//loadingtemplate
?>