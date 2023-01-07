<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinternShip - Chapter 10</title>
    <link rel="stylesheet" href="css/default.css">
    <style>
        .container {
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a href="chapter9.html">Previous Chapter</a>
        <h1>WinternShip</h1>
        <a href="chapter11.php">Next Chapter</a>
    </nav>
    <!-- Partials are the files or the code which we can use anywhere anytime in php by including them so that we don't need to rewrite that code again and again -->
    <div class="container">
        <h1 class="center-text">Introduction To PHP</h1>
        <h2>You Will Need XAMPP or WAMP server to access open this file in browser, VS code live share can't serve this file</h2>
        <h3>We cannot see php script code in browser, php script executes and only printable output is displayed on webpage</h3>
        <br>
        <p> Printing on webpage using php
            we use echo method to print anything on webpage
            but to use php method we must include php tag</p>
        <?php echo "Hello world, printed by php by echo method"; ?>
        <br>
        <?php print "Hello world, printed by php by print method"; ?>
        <p> but anything printed by php will be printed as it is so to print anything on webpage we can use html tags in echo function</p>
        <?php echo "<h1>This is inside a H1</h1>"; ?>
        <h2>every statement in php must end with semicolor ;</h2>
        <h1>include() & require(): </h1>
        <p>we can include a prewritten code by using include or require methods, such files can be called as partials</p>
        <p>difference between include & require will be :</p>
        <p>include : if the file is not found or some error occured during including the file,then the further script won't be stopped it will be executed</p>
        <p>require : if the file is not found or some error occured during including the file,then the further script will be stopped.</p>
    </div>
    <footer class="footer">
        <div><a href="chapter9.html">Previous Chapter</a></div>
        <div><a href="chapter11.php">Next Chapter</a></div>
    </footer>
</body>

</html>