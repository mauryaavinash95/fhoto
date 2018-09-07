<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register yourself</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><img src="../logo.png" width="10%"/></center>
<form name="registration_form" method="post" action="register.php" onsubmit="return validateForm()">
    <div class="table-responsive">
        <table class="table" align="center">
            <tr>
                <td>NAME: </td>
                <td><input type="text" name="name" maxlength="50" required/></td>
                <!-- Set minimum size of this field to 3-->
            </tr>

            <tr>
                <td>EMAIL: </td>
                <td> 
                <input type="email" name="email" required />
                <!-- Set minimum size of this field to 3 and maximum to 50. Should check to accept only string-->
                </td>
            </tr>

            <tr>
                <td>PASSWORD: </td>
                <td><input type="password" name="password" maxlength="50" required/> </td>
                <!-- Set minimum size of this field to 3-->
            </tr>

            <!-- Create another field for confirm password -->

            <tr>
                <td colspan="2"><center><input type="submit" name="submit_register"/> </center></td>
            </tr>
        </table>
    </div>
</form>

<?php

?>

</body>

<script>
// TODO:
// Validate other fields like email and password.
// Password must contain UpperCase & LowerCase alphabets, Numeral and Special Character.
// Validate password and confirm password match
function validateForm() {
    var name = document.forms["registration_form"]["name"].value;
    name = name.trim();
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    var email = document.forms['registration_form']['email'].value;
    email = email.trim();
    if(email.length < 8){
        alert("EMAIL must be of 8 characters.");
        return false;
    }

     var password = document.forms['registration_form']['password'].value;
    password = password.trim();
    if(password.length < 8){
        alert("Password must be of 8 characters.");
        return false;
    }

}
</script>

</html>

