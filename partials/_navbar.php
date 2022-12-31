<head>
    <link rel="stylesheet" href="../css/default.css">
</head>

<?php
if(isset($_GET['next'],$_GET['previous'])){
    $next = $_GET['next'];
    $previous = $_GET['previous'];
    ?>
    <nav class="navbar">
        <a href="<?php echo $previous?>">Previous Chapter</a>
        <h1>WinterShip</h1>
        <a href="<?php echo $next?>">Next Chapter</a>
    </nav>
<?php
}
?>