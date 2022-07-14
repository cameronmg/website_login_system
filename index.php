

<?php
     //start webpage session
     session_start();
     //import file
     include("connection.php");
     include("functions.php");
 
     //want to collect user data in a vriable from login button
     //$con makes a connection to the database
     //check if user is logged in
     $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title> My website </title>
</head>
<body>

    
    <a href="logout.php"> Logout</a>
    <h1> This is the index page </h1>

    <br>
    Hello, Username.

</body>

</html>