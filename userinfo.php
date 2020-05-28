<?php

    $con = mysqli_connect('localhost','root');

    if($con)
    {
        echo "Connection Successful";
    }
    else{
        echo "No Connection";
    }

    mysqli_select_db($con,'userdata');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO userinfodata (username,email,Mobile,Comments) VALUES('$user','$email','$mobile','$comment')";

    mysqli_query($con,$query);

    header("location:index.php");
     
?>