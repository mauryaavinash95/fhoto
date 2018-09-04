<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logout</title>
</head>

<body>
<?php
include('header.php');
// remove all session variables
session_unset();
// destroy the session 
session_destroy();
// TODO:
// Redirect the user to login page after logout.

?>
</body>
</html>