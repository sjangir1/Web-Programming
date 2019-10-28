<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission</title>
    <link href="nerdluv.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php
    include_once 'common.php';
    echo head();
    ?>

    <?php
    $name = $_POST['name'];
    $gen = $_POST['gender'];
    $age = $_POST['age'];
    $per = $_POST['personality'];
    $favos = $_POST['favos'];
    $seek = $_POST['seekingage'];
    $seek1 = $_POST['seekingage1'];
    $fp = fopen("singles.txt", "a");
    $savestring = $name . "," . $gen . "," . $age . "," . $per . "," . $favos . "," . $seek . "," . $seek1 . "\r\n";
    fwrite($fp, $savestring);
    fclose($fp);
    ?>
    <div>
    <h1>Thank you!</h1>
    <p>
    Welcome to NerdLuv, <?= $name ?>!<br /><br />
    Now <a href="matches.php">log in to see your matches!</a>
    </p>
    </div>

    <!-- Footer -->
    <?php
    include_once 'common.php';
    echo foot();
    ?>
</body>
</html>