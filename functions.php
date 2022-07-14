//store function
<?php

//checking if the session values exists
//if the session is real return the user data
//if the user data is not real redirect back to login
function check_login($con)
{
    //check inside session if there is a user id
    if(isset($_SESSION['user_id']))
    {
        //check if the id is legit
        $id = $_SESSION['user_id'];
        //create query to ask database --> * means select  all
        $query = "select * from users where user_id = '$id' limit 1";

        //read from database
        $result = mysqli_query($con, $query);
        //check if the result is positive
        //and if the numbers of rows is greate rthan 0
        if($result &&  mysqli_num_rows($result) > 0)
        {
            // mysqli_fetch_assoc() returns the associated array
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //if none of the above works redirect to login
    header("Location: login.php");
    die;
}

//$length will determine how long the number is
function random_num($length)
{
    $text = "";

    //make sure the number is never less than 5
    if($length < 5)
    {
        $length = 5;
    }

    //how to get a random variable from a minimum of 4 characters to the $length
    //new set length of argument
    $len = rand(4, $length);


    //dont want all user_id to be the same length
    //for the length of the inputted value $length
    for($i = 0; $i < $len; $i++)
    {
        //text = another random numbe from 0 to 9
        $text.= rand(0,9);
        
    }

    return $text;


}