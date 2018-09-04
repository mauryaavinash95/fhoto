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
                {% comment %} Take EMAIL ID as input. The name attribute of this element should be 'email'. It is a required field {% endcomment %}
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
}
</script>

</html>

