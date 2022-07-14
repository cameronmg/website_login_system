<?php

?>

<html>
<head>
    <title> Login </title>
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
            <div style = "font-size: 20px;margin: 10px;color: white;">Login</div>

            
            <input id = "text" type = "text" name = "user_name"><--add break tags--><br><br>
            <input id = "text" type = "password" name = "password"><br><br>

            <input id = "button" type = "submit" name = "Login"><br><br>

            <--Will open up signup page-->
            <a href = "signup.php"> Signup</a><br><br>

        </form>


    </div>
    
</body>
</html>