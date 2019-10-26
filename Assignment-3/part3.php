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
    $month = array ('January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December');
    for($i=0; $i<=12; $i++){
        echo"$month[$i]<br>";
    }
    $new_month=$month;
    sort($new_month);
    for($x=0; $x<=12; $x++){
        echo"$new_month[$x]<br>";
    }
    // print_r($month)."<br>";
    foreach($month as $value){
        echo"$value<br>";
    }
    echo"<br>";
    foreach($new_month as $value){
        echo"$value<br>";
    }
    ?>
</body>
</html>