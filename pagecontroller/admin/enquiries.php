<?php
	$all_enquiries= $enquiries->findAll();//ifnd teh reocreds
	$all_enquirieslist= $all_enquiries->fetchAll(); //fetch the recoreds

//getting id
	if (isset($_GET['eid'])) 
	{
		//$admin_id=$_SESSION['userId'];
		$id=$_GET['eid'];
		$admin= $_SESSION['user'];
		$records=['id'=>$id, 'admin'=>$admin, 'sold'=>1];
		if($enquiries->update($records, 'id'))
		{

			echo '
				<script>
				alert("Saved");
				document.location = "enquiries";
				</script>';
		}

	}


	//deleting  the enquiry
	if (isset($_GET['deid'])) {
	
		if($enquiries->delete('id',$_GET['deid']))
	{
		echo '<script>
				alert("Deleted");
				document.location = "enquiries";
				</script>';
	}
	}

	$cri=[ 'all_enquirieslist'=>$all_enquirieslist];//varibales
	$title= 'Visitor Enquiries';//settng titel

	$content=loadTemplate("../../view/admin/enquiry_view.php",$cri);//loading template
 ?>