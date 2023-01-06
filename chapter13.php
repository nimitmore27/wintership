<!-- Setting the GET request manually to apply those values in navbar & footer -->
<?php
$_GET['previous'] = 'chapter12.php';
$_GET['next'] = 'chapter14.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinternShip - Chapter 13</title>
    <!-- Even if the partial is included in head tag, the content of the navbar will be placed in body tag -->
    <?php include "partials/_navbar.php"; ?>
    <style>
        .container {
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <!-- As the default CSS is included using partials file navbar no need to link it again -->
    <div class="container">
        <h1 class="center-text">Partials & PHP-DB Connection</h1>
        <h3>What are partials files in php?</h3>
        <p>A pre-defined code saved in a separate file, which can be included or used in another file can be called as partials</p>
        <h3>How to use partials efficiently?</h3>
        <p>If we know some part of page will be used in all/some webpages as is it, this code can be written as partial & can be used by using include or require methods</p>
        <br>
        <h2>From Now On we will use partials to keep our code clean & maintain it properly</h2>
        <br><br>
        <h1 class="center-text">PHP Database Connection</h1>
        <h3>To connect with database we first need to have database created on our xampp server</h3>
        <p>In folder structure you can see a winterhip.sql file is provided</p>
        <p>Start your xampp server and then import the file in the provided link</p>
        <a href="http://localhost/phpmyadmin/index.php?route=/server/import" target="_blank">Import Database</a>
        <h3>Function To Connect With Database</h3>
        <p>mysqli_connect() : This function takes 4 arguments which are "servername","username","password","Database name"</p>
        <p>we can declare 4 variables to hold this values or we can simply pass them as the argument to the function</p>
        <p>The value return by the function will be stored in $con variable</p>
        <pre>
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "winternShip";
    $con = mysqli_connect($servername,$username,$password,$database);
    if($con){
        die("Connection Unsuccessful");
    }
    else{
        echo "Connected";
    }
        </pre>
        <p>This code will be written in php tag to be executed</p>
        <p>If the connection is failed then the die method will be executed otherwise it will print connected</p>
        <p>We use db connection as a partial file in php because we need to connect to database before using any SQL query </p>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "winternship";
        try {
            $con = mysqli_connect($servername, $username, $password, $database);
            if (!$con) {
                die("Connection Unsuccessful");
                // If the connection is not made, then the further code won't work because of the die() method
                // we have used try & catch to handle this error
            } else {
                echo "<h3>Database Connected Successfully</h3>";
            }
        } catch (\Throwable $th) {
            echo "<h3>Error Occured</h3>";
        }

        ?>
        <p>As the server is on and Database is created, Above we can see the database is connected</p>
        <p>Try changing values of php variables for getting error</p>
        <h1 class="center-text">We Have Saved this Connection Code as a partial file, which will be used in our next chapter</h1>
        <br><br><br>
    </div>

    <?php include "partials/_footer.php"; ?>
</body>

</html>