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
    $res=array("Chama Gaucha"=>"Average Cost $40.50","Aviva by Kameel"=>"Average Cost $15.00","Bone's Restaurant"=>"Average Cost $65.00",
                                    "Umi Sushi Buckhead"=>"Average Cost $40.50","Fandangles"=>"Average Cost $30","Capital Grille"=>"Average Cost $60.50","Canoe"=>"Average Cost $35.50","One Flew South"=>"Average Cost $21.00",
                                    "Fox Bros. BBQ"=>"Average Cost $15.00","South City Kitchen Midtown"=>"Average Cost $29.00");
    echo"First-Part";
    echo "<table>";
    foreach ($res as $key=>$value) 
    { 
        echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
    }
    echo "</table>";

    function price($x){
    sort($x);
    echo "<table>";
    foreach ($x as $key=>$value) 
    { 
        echo "<tr><td>".$value."</td></tr>";
    }
    echo "</table>";
    }

    function name($y){
    ksort($y);
    echo "<table>";
    foreach ($y as $key=>$value) 
    { 
        echo "<tr><td>".$key."</td></tr>";
    }
    echo "</table>";
    }
    
    echo"<br>";
    echo"Second-Part";
    echo"<br>";
    echo"<br>";
    echo"Sorted Prices";
    price($res);
    echo"<br>";
    echo"Sorted Names";
    name($res);
    ?>
    
</body>
</html>