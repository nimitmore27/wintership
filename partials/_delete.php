<?php
    // Lets check if the POST variables are SET or NOT
    if(isset($_POST['id']))
    {
        // taking url from the post request sent by hidden input field
        $url = $_POST['url'];

        // we will check for the input fields are empty by using trim function of php
        if(trim($_POST['id'])!='')
        {
            // If input fields are not empty then this will happen
            
            // including connection file to connect with db
            include "connection.php";
            $id = $_POST['id'];
            $sql = "delete from dummy where id='$id'";
            mysqli_query($con,$sql);
            // on successful database row deletion redirect to current page, this is like a anchor tag. here also we can send GET request 
            header("location: /wintership/$url?dmsg=Data Deleted Successful");
        }
        else{
            header("location: /wintership/$url?dmsg=values not provided");
        }
    }else{
        header("location: /wintership/$url?dmsg=can't access page directly");
    }
?>