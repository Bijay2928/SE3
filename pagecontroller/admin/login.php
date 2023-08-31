<?php
if(isset($_POST['login']))//loign call button
{
	$logger = $admins->find('username',$_POST['username']);//chekcing
	if($logger->rowCount()>0)//count 
	{
		$logger_row=$logger->fetch();//fetch the reocrd
		if(password_verify($_POST['password'], $logger_row['password']))//vairfying password
		{
			$_SESSION['userId']=$logger_row['id'];//variging id
			$_SESSION['user']=$logger_row['username'];//varifying username
			$_SESSION['type']=$logger_row['role'];//vaifyong the irle
			$_SESSION['isLogged']=true;//ocnditon
			header('Location:admin/admin_home');//heater

		}
		else
		{
			echo "Invalid Password";
		}
	}

	else
	{
		echo "User Not Found";
	}
}


 $title = "Log In";//setting title
 $content = loadTemplate("../view/admin/login_view.php", []);//loaidng tempalte
?>