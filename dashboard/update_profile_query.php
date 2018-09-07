<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Details</title>
</head>

<body>
<?php
	include('header.php'); 
	if(isset($_POST['submit']))	
	{
		// TODO:
		// Retrive the below given fields from previous page.
		// What would you use to retrive name? $_POST['name'] or $_SESSION['name'];
		$name =  $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql_update = 'UPDATE `users` SET `name`="'.$name.'",`password`="'.$password.'" WHERE email = "'.$email.'"';

		if(mysqli_query($connect,$sql_update))
		{
			echo "<script type='text/javascript'>alert('Update Successful.. Please Login Again to continue');</script>";
			header( "refresh:0 ;url=logout.php" );
		}
		else
		{
			echo "<script type='text/javascript'>alert('Update Not Successful.. Please Try Again');</script>";
			header( "refresh:0 ;url=../" );
		}
	}

?>
</body>
</html>