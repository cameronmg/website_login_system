<?php
//create restrictions
session_start();

    //include the files on webpage
    include("connection.php");
    include("functions.php");

    //if the request to our server is a post
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        //collect data from post variable
        $user_name = $_POST ['user_name'];
        $password = $_POST ['password'];

        //check if the variables are not empty
        //!is_numeric() makes sure user name isnt numbers
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //if all conditions are sastified from above


            //save to database
            //define user_id as variable
            //random_num() will generate a string with a length of 20 with random characters
            $user_id = random_num(20);
            //parameters that are defined in phpmyadmin is where we are sending the values too
            $query = "insert into users(user_id, username, password) values ('$user_id', '$user_name', '$password')";

            //save everything
            //define connection and save query
            mysqli_query($con, $query);

            //redirect user
            header("Location: login.php");
            die;

        }else
        {
            //print out statement if conditions are not met above
            echo "Please enter some valid information!";
        }
    }
;   

?>

<html>
<head>
    <title> Signup </title>
</head>
<body>
    <-- add CSS style -->
    <style type = "text/css">

    #text{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
    }

    #button{

            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
    }

    #box{

            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
    }

    </style>

    <div id = "box">
        <-- Creating form where user can type-->
        <form method = "post">
            <--add style to login page-->
            <div style = "font-size: 20px;margin: 10px;color: white;">Signup</div>

            
            <input id = "text" type = "text" name = "user_name"><--add break tags--><br><br>
            <input id = "text" type = "password" name = "password"><br><br>

            <input id = "button" type = "submit" name = "Signup"><br><br>

            <--Will open up signup page-->
            <a href = "login.php"> Click to Login</a><br><br>

        </form>


    </div>
    
</body>
</html>