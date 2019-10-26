<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link href="part2.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
    <?php
    echo '<table style="width:300px;" cellspacing=1 cellpadding=1>'; 
    for($i=0;$i<8;$i++){ 
        echo '<tr>'; 
        for($j=0;$j<8;$j++){ 
            $c = ($i+$j)%2 ? 'red' : 'black'; 
            echo '<td bgcolor="'.$c.'" style="width:35px; height:35px; border:1px;"/>'; 
        } 
        echo '</tr>'; 
    } 
    echo '</table>'; 
    ?>
</body>
</html>