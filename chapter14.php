<!-- Setting the GET request manually to apply those values in navbar & footer -->
<?php 
    $_GET['previous'] = 'chapter13.php';
    $_GET['next'] = 'chapter15.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinternShip - Chapter 14</title>
    <!-- Even if the partial is included in head tag, the content of the navbar will be placed in body tag -->
    <?php  include "partials/_navbar.php";?>
    <style>.container{min-height: 100vh;}</style>
</head>
<body>
    <div class="container">
        <h1 class="center-text">CRUD Operation</h1>
        <h2 class="center-text red-text">Refer Files used in action attribute of form</h2>
        <h3>CRUD Stands for Create, Read, Update, Delete.</h3>
        <p>This are the basic operations which we must need to know for making any application.</p>
        <h3 class="red-text">We Will Use Form tag and POST Method to send data to database</h3>
        <br>
        <h4>including the connection File</h4>
        <pre>
    &lt;?php include "partilas/connection.php"; ?>
        </pre>
        <?php include "partials/connection.php";?>
        <br>
        <h3>CREATE : Create means insertion in table, i.e. creating a new row/entry in table</h3>
        <form action="partials/_create.php" method="post">
            <input type="text" name="col1" placeholder="value for column 1">
            <input type="text" name="col2" placeholder="value for column 2">
            <input type="hidden" name="url" value="chapter14.php">
            <button type="submit">Create</button>
        </form>
        <!-- Handling GET request -->
        <?php if(isset($_GET['cmsg'])){echo "<h3 class='red-text'>".$_GET['cmsg']."</h3>";}?>
        <pre>
    &lt;?php
        $sql = "insert into dummy (col1,col2) values ('value1','value2')";
        mysqli_query($con,$sql);
    ?>
        </pre>
        <br>
        <h3>READ : READ means Fetch data from table, i.e. Reading existing data from table</h3>
        <pre>
    &lt;?php
        if(isset($_POST['getdata'])){
            $sql = "select * from dummy";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($result)){
                echo "&lt;p>&lt;span>ID : ".$row['id']."&lt;/span> &lt;span>Col 1 : ".$row['col1']."&lt;/span> &lt;span>Col2 : ".$row['col2']."&lt;/span> &lt;/p>";
            }
        }
    ?>
        </pre>
        <form action="chapter14.php" method="post">Click Here To GET Data : <button type="submit" name="getdata">Get Data</button></form>
        <!-- Handling POST request to fetch data -->
        <?php
        if(isset($_POST['getdata'])){
            $sql = "select * from dummy";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($result)){
                echo "<p><span>ID : ".$row['id']."</span> <span>Col 1 : ".$row['col1']."</span> <span>Col2 : ".$row['col2']."</span> </p>";
            }
        }
        ?>
        <br>
        <h3>UPDATE : UPDATE means modifying existing data in table, i.e. Updating existing data in table</h3>
        <pre>
    &lt;?php
        $sql = "update dummy set col1='$val1',col2='$val2' where id='$id'";
        mysqli_query($con,$sql);
    ?>
        </pre>
        <form action="partials/_update.php" method="post">
            <input type="text" name="id" placeholder="ID number">
            <input type="text" name="col1" placeholder="updated value for column 1">
            <input type="text" name="col2" placeholder="updated value for column 2">
            <input type="hidden" name="url" value="chapter14.php">
            <button type="submit">UPDATE</button>
        </form>
        <!-- Handling GET request -->
        <?php if(isset($_GET['umsg'])){echo "<h3 class='red-text'>".$_GET['umsg']."</h3>";}?>
        <br>
        <h3>DELETE : DELETE means removing existing data from table, i.e. deleting existing data from table</h3>
        <pre>
    &lt;?php
        $sql = "delete from dummy where id='$id'";
        mysqli_query($con,$sql);
    ?>
        </pre>
        <form action="partials/_delete.php" method="post">
            Enter ID number to delete record from Database : <input type="text" name="id" placeholder="ID number">
            <input type="hidden" name="url" value="chapter14.php">
            <button type="submit">DELETE</button>
        </form>
        <!-- Handling GET request -->
        <?php if(isset($_GET['dmsg'])){echo "<h3 class='red-text'>".$_GET['dmsg']."</h3>";}?>
        <br><br><br>
    </div>
    <?php  include "partials/_footer.php";?>
</body>
</html>