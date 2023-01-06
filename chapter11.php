<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinternShip - Chapter 11</title>
    <link rel="stylesheet" href="css/default.css">
    <style>body{background-color: beige;}</style>
</head>
<body>
    <nav class="navbar">
        <a href="chapter10.php">Previous Chapter</a>
        <h1>WinternShip</h1>
        <a href="chapter12.php">Next Chapter</a>
    </nav>
    <h1 class="center-text">GET & POST</h1>
    <div class="container">
        <h3>What is GET & POST in php?</h3>
        <p>GET & POST are the methods by which we can send data across files</p>
        <h4>Which should we use?</h4>
        <p>It's totally our choice to any method to send data</p>
        <h3>What are superglobal variables in PHP?</h3>
        <p>superglobal variables are the arrays which can hold the data and can be accessed in any file in the server,<br>there are many superglobal variables in php from which we will be learning about $_POST & $_GET in this chapters and $_SESSION & $_FILES will be your self learning topics.</p>
    </div>
    <br>
    <div class="container example">
        <h3 class="center-text">GET METHOD & $_GET</h3>
        <p>As title suggests the superglobal variable $_GET will be used to access the data send through the GET request</p>
        <p>In HTML, to send GET request we have 2 tags which are : </p> 
        <ol style="margin-left: 2rem;">
            <li> <b>Form :</b>In form tag using <b> attribute"method"</b> we can send the method of sending data to <b>"GET"</b></li>
            <li> <b>Anchor : </b>In anchor tag, we can append the data in key=value pair in the url of the file to send data to that file </li>        
        </ol> <br>
        <h3 class="center-text">How a GET request appears?</h3>
        <p>We must have seen, most of the url consist of question marks (?), equal to (=), and lots of text, lets see an example and decode a GET request</p>
                                                <!-- Target Attribute defines the behaviour of opening the requested URL -->
        <p>URL : <a href="https://www.google.com/search?q=harry%20potter" target="_blank">https://www.google.com/search?q=harry%20potter</a></p>
        <p>URL : <a href="https://www.google.com/search?q=harry+potter" target="_blank">https://www.google.com/search?q=harry+potter</a></p>
        <p>In above url : </p>
            <ul>
                <li><b>HTTPS</b> is the protocol</li>
                <li><b>google.com</b> is the domain name</li>
                <li><b>/search</b> could be the dir where the search page is stored</li>
                <li><b>?</b> question mark in the URL denotes the data sent through request</li>
                <li><b>q</b>, in the above example google has used 'q' as the key of the data, which could be anything (whatever the programmer defines)</li>
                <li><b>harry%20potter</b> is the data send from the google.com page to google.com/search page which we can see in search box </li>
                <li>The <b>white spaces</b> in the sent data are written as %20 in the URL</li>
                <li>The <b>white spaces</b> in the sent data can also be written as + in the URL</li>
            </ul>
            <p>Conclusion : In a tag (anchor) using "href" attribute we can send data in form of key=value </p>
            <p>e.g. : <a href="chapter11.php?msg=This Is A GET Request">Send GET Request</a></p>
            <p>After click the above link you can in the address bar the msg written inside the href is send as a data to the page, further we will see how to access this send data</p>
            <br>
            <h3 class="center-text">GET using Form</h3>
            <form action="chapter11.php" method="GET">
                <input type="text" name="msg" placeholder="write a GET msg">
                <input type="submit" value="Submit">
            </form>
            <p>Above, we have created a simple form with method attribute set to "GET" and action attribute set to "chapter11.php" <br> so the data written in the form will be submitted on click of submit button, and will be transfered to chapter11.php file using form</p>
            <br>
            <h3 class="center-text">POST & $_POST</h3>
            <p class="center-text" style="color:red">After using form if you see confirm Form Submission alert, then do ignore as it is generated because we are sending data in same page</p>
            <p>As title suggests the superglobal variable $_POST will be used to access the data send through the POST request</p>
            <p>In HTML we can send data using <b>FORM</b> tag by setting the <b>"Method" attribute to "POST"</b></p>
            <p>Lets Take Same example as above, but setting the method attribute to POST</p>
            <br>
            <form action="chapter11.php" method="POST">
                <input type="text" name="msg" placeholder="write a POST msg">
                <input type="submit" value="Submit">
            </form>
            <p>The name attribute of the input boxes becomes the key of the $_POST superglobal variable i.e. $_POST['msg']</p>
            <p>Data Sent by POST is not visible in URL, which makes it more secure than GET</p>
            <p>In the above given example, even after submitting the form the msg didn't appear on the page, so how to access this data will be covered in next chapter</p>
    </div>
    <footer class="footer">
        <div><a href="chapter10.php">Previous Chapter</a></div>
        <div><a href="chapter12.php">Next Chapter</a></div>
    </footer>
</body>
</html>