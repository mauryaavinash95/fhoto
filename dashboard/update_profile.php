<?php
include '../connect.php';
// TODO:
// Perform form validation like that of signup.
// Can we remove redundancy from here as well?
?>
<?php   
	include('header.php'); 
	$email = $_SESSION['name'];
	$sql_entry = "SELECT * FROM users WHERE name = '$email'";
	$res_entry = mysqli_query($connect,$sql_entry);
	if(mysqli_num_rows($res_entry)>0)
	{
		$row_entry = mysqli_fetch_array($res_entry);
		echo '<center><div style="width:60%">';
		echo '<table class="table table-striped" border="0"><form  class="form-horizontal" action="update_profile_query.php" method="POST" onsubmit="myfunction()">';
		
		echo '<tr>';
		echo '<td><b><center>';
		echo 'Username : ';
		echo '</td>';
		echo '<td>';
		$name= $row_entry['name'];
		echo '<input type="text" value="'.$name.'" name="name"/> ';
		echo '</td>';
		echo '</tr>';
		
		// TODO
		// Make the email field non-editable. This will act as anchor while updating the records.
		echo '<tr>';
		echo '<td><b><center>';
		echo 'Email id : ';
		echo '</td>';
		echo '<td>';
		$email = $row_entry['email'];
		echo '<input type="text" value="'.$email.'" name="email" readonly/> ';
		echo '</td>';
		echo '</tr>';
		echo '<td><b><center>';
		echo 'Change Password : ';
		echo '</td>';
		echo '<td>';
		$password= $row_entry['password'];
	    echo '<input type="text" name="password" value="'.$password.'" id="password"/>';
		echo '</td>';
		echo '</tr>';
		
		
		
		echo '<tr>';
		echo '<td colspan="2">';
		echo '<center><input type="submit" class="button"name="submit"/>';
		echo '</td>';
		echo '</tr>';
		
		
		echo '</table></form>';
		echo '</div></center>';
	}

	
?>