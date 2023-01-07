<?php
// The CSS for the footer is written inside default.css file but we will be including the navbar which is having our css file
// we don't need to include the css file again as the code for navbar & footer are going to be in same file afterall where the files are included/require. 
if(isset($_GET['next'],$_GET['previous'])){
    $next = $_GET['next'];
    $previous = $_GET['previous'];
    ?>
    <footer class="footer">
        <div>
            <a href="<?php echo $previous?>">Previous Chapter</a>
        </div>
        <div>
            <a href="<?php echo $next?>">Next Chapter</a>
        </div>
    </footer>
<?php
}
?>