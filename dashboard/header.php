<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
</head>
<?php
include '../connect.php';
session_start();
// TODO:
// Even if the user is not logged in, this page gets rendered with unhandled error.
// Show error message and redirect the user to Login Page
if(!$_SESSION['name']){
    echo "<script type='text/javascript'> alert('Please login first') </script>";
    header('Location: ../index.php');
}
?>
<body>

<center><img src="../logo.png" width="7%"/></center>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#">Welcome <?php echo $_SESSION['name']; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="new_post.php">New Post</a></li>
                <li><a href="my_posts.php">My Posts</a></li>
                <li><a href="delete_post.php">Delete Post</a></li>
                <li><a href="update_profile.php">Update Profile</a></li>
                <li><a href="logout.php">Logout</a> </li>
            </ul>
        </div>
    </div>
</nav>
