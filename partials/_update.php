<?php
    // Lets check if the POST variables are SET or NOT
    if(isset($_POST['id'],$_POST['col1'],$_POST['col2']))
    {
        // taking url from the post request sent by hidden input field
        $url = $_POST['url'];

        // we will check for the input fields are empty by using trim function of php
        if(trim($_POST['col1'])!='' && trim($_POST['col2'])!='' && trim($_POST['id'])!='')
        {
            // If input fields are not empty then this will happen
            
            // including connection file to connect with db
            include "connection.php";
            $id = $_POST['id'];
            $val1 = $_POST['col1'];
            $val2 = $_POST['col2'];
            $sql = "update dummy set col1='$val1',col2='$val2' where id='$id'";
            mysqli_query($con,$sql);
            // on successful database row updation redirect to current page, this is like a anchor tag. here also we can send GET request 
            header("location: /wintership/$url?umsg=Data Updated Successful");
        }
        else{
            header("location: /wintership/$url?umsg=values not provided");
        }
    }else{
        header("location: /wintership/$url?umsg=can't access page directly");
    }
?>