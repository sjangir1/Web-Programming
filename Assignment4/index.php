<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nerdLuv</title>
    <link href="nerdluv.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php
    include_once 'common.php';
    echo head();
    ?>

    <!-- Body of the Homepage -->
    <div>
        <p><b>Welcome!</b></p>
        <ul>
            <li>
            <img src="images/indexreg.png" alt="Signup" width="25px" height="25px">
            <a href="signup.php">Sign up for a new account</a>
            </li>
            <li>
            <img src="images/indexheart.png" alt="Check Match" width="25px" height="25px">
            <a href="matches.php">Check for matches</a>
            </li>
        </ul>
    </div>

    <!-- Footer -->
    <?php
    include_once 'common.php';
    echo foot();
    ?>
</body>
</html>