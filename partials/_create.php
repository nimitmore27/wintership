<?php
    // Lets check if the POST variables are SET or NOT
    if(isset($_POST['col1'],$_POST['col2']))
    {
        // taking url from the post request sent by hidden input field
        $url = $_POST['url'];

        // we will check for the input fields are empty by using trim function of php
        if(trim($_POST['col1'])!='' && trim($_POST['col2'])!='')
        {
            // If input fields are not empty then this will happen
            
            // including connection file to connect with db
            include "connection.php";
            
            $val1 = $_POST['col1'];
            $val2 = $_POST['col2'];
            $sql = "insert into dummy (col1,col2) values ('$val1','$val2')";
            mysqli_query($con,$sql);
            // on successful database row insertion redirect to current page, this is like a anchor tag. here also we can send GET request 
            header("location: /wintership/$url?cmsg=Data Entered Successful");
        }
        else{
            header("location: /wintership/$url?cmsg=values not provided");
        }
    }else{
        header("location: /wintership/$url?cmsg=can't access page directly");
    }
?>