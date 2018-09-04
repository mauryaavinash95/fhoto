<?php
include 'connect.php';

// TODO:
// Use HTML & CSS to beautify this page.
// If a user directly visits this page, he should see an error message and be redirected to Login page

$email = $_POST['email'];
$password = $_POST['password'];

// TODO ADVANCED:
// Secure password by storing MD5/SHA-512 hash in DB.
$sql_users = "SELECT * FROM `users` WHERE `email`='".$email."' AND `password`='".$password."'";

$res_users = mysqli_query($connect, $sql_users);
if(mysqli_num_rows($res_users) < 1)
{
    echo "No user found with entered email & password combination";
    echo "<br><br><a href='index.php'>Try logging in again</a>";
}
else
{
    $row_users = mysqli_fetch_array($res_users);
    session_start();
    $_SESSION['userid'] = $row_users['userid'];
    $_SESSION['name'] = $row_users['name'];
    $_SESSION['email'] = $row_users['email'];
    header("Location: dashboard/index.php");
}
?>