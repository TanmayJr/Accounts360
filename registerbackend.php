<?php
    $con =  mysqli_connect("localhost","root") or die(mysqli_error("Disconnect"));
    echo "Connection established";
    $db_name = "mini";
    mysqli_select_db($con ,$db_name) or die (mysqli_error());
    echo "Database found";
    $username = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $password = $_POST["pwd1"];

    $query = "insert into users (username,password,email,company) values ('$username','$password','$email','$company')";
    if($query == true){
        print "Sucess";
    }
    else{
        print "try again";
    }
    mysqli_query($con, $query) or die(mysqli_error("in er"));
    mysqli_close($con);
?>