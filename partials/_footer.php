<?php
if(isset($_GET['next'],$_GET['previous'])){
    $next = $_GET['next'];
    $previous = $_GET['previous'];
    ?>
    <footer class="footer">
        <div>
            <a href="chapter5.html">Previous Chapter</a>
        </div>
        <div>
            <a href="css/chapter6.css">Check CSS File</a>
        </div>
        <div>
            <a href="chapter7.html">Next Chapter</a>
        </div>
    </footer>
<?php
}
?>