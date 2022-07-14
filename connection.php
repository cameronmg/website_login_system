//for connecting to data base

<?php

//input server into db variable
$dbhost = "localhost:3307";
$dbuser = "root";
//empty pass b/c on localhost server
$dbpass = "011802";
//input name of datatbase from phpmyadmin
$dbname = "login_sample_db";

//creating variable to connect to database
//define variables to store parametrs from database
//if connection to database does not workout print statement else everything wor
#$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("failed to connect to database!");
}
?>