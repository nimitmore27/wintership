<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinternShip - Chapter 12</title>
    <link rel="stylesheet" href="css/default.css">
    <style>.red-text{color: red;}</style>
</head>
<body>
    <nav class="navbar">
        <a href="chapter11.php">Previous Chapter</a>
        <h1>WinternShip</h1>
        <a href="chapter13.php">Next Chapter</a>
    </nav>
    <h1 class="center-text">Accessing Data From GET REQUEST</h2>
    <div class="container">
        <h3>How to access the data ?</h3>
        <p>As we know we can open php tag anywhere in html file, so to access the data we need to write the code inside the php tag</p>
        <p>Accessing data from the superglobal variables is same as accessing data from array using index number (here using key) or the OBJECTS of JavaScript key</p>
        <h4 class="center-text red-text">ignore the errors occured below as they are kept there knowingly </h4>
        <br>
        <p>Refer PHP code to understand error</p>
        <h4 style="border: 1px solid blue;"> Your MSG Is :
            <?php echo $_GET['msg'];?>
        </h4>
        <br>
        <h4 style="border: 1px solid green;"> Your MSG Is :
            <?php
                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
            ?>
        </h4>
        <br>
        <h3 class="center-text red-text"> The above written code is written to access the data send via GET request, The error is occuring because initially we haven't send any msg , so to avoid such errors we first check if the superglobal variabls are set or not by using isset() method</h3>

        <br>
        <p>Using previous chapter's example</p>
        <form action="chapter12.php" method="GET">
        Example No. 1 :    <input type="text" name="msg" placeholder="write a GET msg">
            <input type="submit" value="Submit">
        </form>
        <p>Example No. 2 : <a href="chapter12.php?msg=This Is A GET Request">Send GET Request</a></p>
    </div>
    <br>
        <h1 class="center-text">Accessing Data From POST REQUEST</h1>
    <div class="container">
        <p>As we know we can open php tag anywhere in html file, so to access the data we need to write the code inside the php tag</p>
        <p>Accessing data from the superglobal variables is same as accessing data from array using index number (here using key) or the OBJECTS of JavaScript key</p>
        <p>This is exactly similar to accessing data of GET request</p>
        <h4 class="center-text red-text">ignore the errors occured below as they are kept there knowingly </h4>
        <br>
        <p>Refer PHP code to understand error</p>
        <h4 style="border: 1px solid blue;"> Your MSG Is : 
            <?php echo $_POST['msg'];?>
        </h4>
        <br>
        <h4 style="border: 1px solid green;"> Your MSG Is : 
            <?php
                if(isset($_POST['msg'])){
                    echo $_POST['msg'];
                }
            ?>
        </h4>
        <br>
        <h3 class="center-text red-text"> The above written code is written to access the data send via POST request, The error is occuring because initially we haven't send any msg , so to avoid such errors we first check if the superglobal variabls are set or not by using isset() method</h3>

        <br>
        <p>Using previous chapter's example</p>
        <form action="chapter12.php" method="POST">
        Example No. 1 :    <input type="text" name="msg" placeholder="write a POST msg">
            <input type="submit" value="Submit">
        </form>
        <br><br>
        <p>The below mentioned example is kind of fun activity, here we are sending a hard coded GET request using the URL (action) of the form which has a method set to POST</p>
        <p>So the form will send the data from the inputs boxes as well as it will generate a hard coded GET request because of action attribute</p>
        <form action="chapter12.php?msg=GET REQUEST SEND with POST FORM SUBMISSION" method="POST">
        Example No. 2 :    <input type="text" name="msg" placeholder="write a POST msg">
            <input type="submit" value="Submit">
        </form>
        <h3>NOTE : So, we can say that using any URL we can send a GET request & We Use "name" attribute of the input tags within a form as the keys for our superglobal variable $_POST[] as well as $_GET[]</h3>
        <br> <br> <br>
    </div>
    <footer class="footer">
        <div><a href="chapter11.php">Previous Chapter</a></div>
        <div><a href="chapter13.php">Next Chapter</a></div>
    </footer>
</body>
</html>