<head>
    <!-- It is a very important concept we must know about partial files -->
    <!-- we have to link pages or provide paths to the anchors by assuming the file path as when this partial file is included somewhere -->
    <!-- For More understanding, look at below where we have linked a css file to our partial file navbar -->
    <link rel="stylesheet" href="css/default.css">
    <!-- the file path of default.css from the current file i.e. _navbar.php is :  -->
    <!-- 1 folder back (outside partials folder) -->
    <!-- in css folder  -->
    <!-- i.e. path = "../css/default.css" -->

    <!-- but this partial code/file will be included by our chapter files which are outside of this current folder
so the path relative to the file where we are including this partial file will be like directly going to css and the default.css -->
</head>

<?php

// checking the GET variables are set or not by using isset() method
// this GET variables are set inside each file to change the next and previous chapter according to current chapter
if(isset($_GET['next'],$_GET['previous'])){
    $next = $_GET['next'];
    $previous = $_GET['previous'];
    ?>
    <nav class="navbar">
        <!-- as we know we can open php tag anywhere inside the html file -->
        <!-- including php tag between the href value so that we can dynamically set value to href -->
        <a href="<?php echo $previous?>">Previous Chapter</a>
        <h1>WinternShip</h1>
        <a href="<?php echo $next?>">Next Chapter</a>
    </nav>
<?php
}
?>