<?php
include '../connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// TODO ADVANCED:
// Secure password by storing MD5/SHA-512 hash in DB.

$sql_users = "INSERT INTO `workshop`.`users` (`userid`, `name`, `email`, `password`) VALUES (NULL, '".$name."', '".$email."', '".$password."');";
$res_users = mysqli_query($connect, $sql_users);
if($res_users== true)
{
    echo "Registration successful";
    echo "<br><br><a href='../index.php'>Proceed with login</a>";
}
else
{
    echo "Registration unsuccessful, or EMAIL already registered";
    echo "<br><br><a href='../index.php'>Try signing up again</a>";
}

?>