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
    function isBitten(){
        $t=rand(0,100);
        if ($t<=50){
            echo"Probability=",$t;
            echo"<br>";
            echo"Charlie did not eat my lunch!";
        }
        else{
            echo"Probability=",$t;
            echo"<br>";
            echo"Charlie ate my lunch!";
        }
    }
    isBitten();
    ?>
</body>
</html>