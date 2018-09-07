<?php
include 'header.php';
$userid = $_SESSION['userid'];
$post_text = $_POST['post_text'];
// TODO ADVANCED
// The user can upload two pictures with same file name, in such cases, the older one will get overwritten
// Your task is to eliminate the unique file problem.
$new_filename = $_FILES['fileToUpload']['name'];
$uploaddir = '../uploads/';
// TODO ADVANCED
// Check if the file to be uploaded is in png, jpg or jpeg format.
// Only allow to upload the above image extensions. Otherwise throw error.
$uploadfile = $uploaddir . basename($new_filename);
$timestamp = date('Y-m-d H:i:s');
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile))
{
    $text = $_POST['post_text'];
    // TODO
    // Write an insert query to perform insertion of the new post in `post` table.
    $sql_insert = "INSERT INTO posts (userid, timestamp, image, text) 
    VALUES ('".$userid."', '".$timestamp."', 
    '".$new_filename."', '".$post_text."');";
    mysqli_query($connect, $sql_insert);
    // TODO 
    // Present a more interactive response to user. Maybe you can use alert.
    // Land back the user to Home Page after this.
    echo "<script type='text/javascript'>alert('Upload Successful'); header('location: index.php')</script>";
    echo "File is valid and was successfully uploaded.\n";
}
else
{
    echo "File upload not successful\n";
    echo 'Here is some more debugging info:';
    print_r($_FILES);
}
?>