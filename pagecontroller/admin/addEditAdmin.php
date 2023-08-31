<?php 
$admin_detail= $admins->findAll();//to find the record
$admin_list= $admin_detail->fetchAll();//fetch all the details

if(isset($_GET['aid'])){ //to get record giving id
	$admin_id=$admins->find('id',$_GET['aid']);//to find the record wof specifc
	$admin_list=$admin_id->fetch();//fetching record
	$cri=[
		'admin_list'=>$admin_list
		];
}

if(isset($_GET['daid'])){//getting id to detele the selected row
	$admins->delete('id',$_GET['daid']);//getting button id
	header('Location:staff');//location
}


if (isset($_POST['addAdmin'])) {//add admin is the name of button to click
		
		if($_POST['username'] == "" || $_POST['password'] == "") echo "<script>alert('Fill in all the forms')</script>";//if condtion to fill all the form

		else{
			$values = [//for values
				'id' => $_POST['id'],//id
				'username' => $_POST['username'],//username
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),//password value
				'role'     => $_POST['role']//role value
			];

			$check = $admins->save($values, 'id');//to check id
			if($check == true){//check condtion
				echo '<script>
					 alert("Staff Saved!"); 
					 document.location="staff";
					 </script>';
			}else{
				echo '<script>
					 alert("staff culdnot save");
					 </script>';
			}
		}
}
$title='Add/Edit Administrators';//setting title
$cri=['admin_list'=>$admin_list];
$content=loadTemplate("../../view/admin/addEditAdmin_view.php", $cri);//loading view template

 ?>