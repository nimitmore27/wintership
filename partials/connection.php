<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "winternShip";
    $con = mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die("Connection Unsuccessful");
    }
    else{
        echo "<h4>Connected</h4>";
    }
    // If the database is connected successfully, then connected will be printed on page which we don't want, so it is written for testing only
?>