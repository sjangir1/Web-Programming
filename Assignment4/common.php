<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    function head()
    {
        return<<<HTML
        <div id="bannerarea">
        <h1><img src="images/indexbanner.png" alt="banner"></h1>
        </div>
        HTML;
    }
    function foot()
    {
        return<<<HTML
        <div id="bannerarea">
            <p>This page is for single nerds to meet and date each other! Type in your presonal information and wait for the nerdly luv to begin! <br>Thank you for using our site.</p>
            <p>Results and page (C) Copyright NerdLuv Inc.</p>
            <img src="images/backbutton.jpg" alt="backbutton" width="25px" height="25px">
            <a href="index.php">Back to front page</a>
        </div>
        <div>
            <a href="https://validator.w3.org/"><img src="images/html5validator.png" alt="html5validator" width="100px"></a>
            <a href="https://jigsaw.w3.org/css-validator/"><img src="images/w3ccss.png" alt="html5validator" width="100px"></a>
        </div>
        HTML;
    }
?>
</body>
</html>

