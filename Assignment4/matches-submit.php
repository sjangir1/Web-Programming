<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matches Found</title>
    <link href="nerdluv.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include_once 'common.php';
    echo head();
    ?>
    <?php
    //Variables(ye apan ne youtube se niakle hai bhaiya ji)
    $textFile = file_get_contents("singles.txt");
    $singles = explode("\n", $textFile);
    $notInFile = false;
    //user ki information
    $userName = $_GET["name"];
    $userInfo = array();
    foreach ($singles as $people) {
        $userInfo = explode(",", $people);
        if($userInfo[0] == $userName){   
            break;
        }
    }
    //checking if personality is matching
    function checkPersona($matchPersona, $userPersona){
        for($i=0; $i<4; $i++){
            if ($matchPersona[$i] == $userPersona[$i]){
                return true;
            }
        }
    }
    //create match array
    function createMatches(){
        global $singles;
        global $userInfo;
        $matches = $singles;
        $arraySize = sizeof($matches);
        for ($i=0; $i<$arraySize; $i++){
            $matchInfo = explode(",", $matches[$i]);
            $location = $i+1;
            if ($matchInfo[1] == $userInfo[1]){
                unset($matches[$i]); //remove same gender from array
            }
            elseif ($matchInfo[4] != $userInfo[4]){
                unset($matches[$i]); //remove different OS from array
            }
            elseif (($matchInfo[2] < $userInfo[5] || $matchInfo[2] > $userInfo[6]) || ($userInfo[2] < $matchInfo[5] || $userInfo[2] > $matchInfo[6])){
                unset($matches[$i]); //remove ages outside range from array
            }
            elseif (!checkPersona(str_split($matchInfo[3]), str_split($userInfo[3])))
            {
                unset($matches[$i]); //remove incompatible personas from array
            }
        }
        $matches = array_values($matches); //re-indexing kari array ki(mat puchna kyu aur kaise)
        return $matches;
    }
    //Function to get matches
    function displayMatches(){
        $matches = createMatches();
        for ($i=0; $i<sizeof($matches); $i++) {
            $matching = explode(",", $matches[$i]);
            printMatches($matching);
        }
    }
    //display matches
    function printMatches($matching){
        echo "<div class='match'>
        
            <p><img src='images/nerd-couple.jpg' alt='user icon' />
            " . $matching[0] . "</p>
            <ul>
                <li><strong>gender:</strong>" . $matching[1] . "</li>
                <li><strong>age:</strong>" . $matching[2] . "</li>
                <li><strong>type:</strong>" . $matching[3] . "</li>
                <li><strong>OS:</strong>" . $matching[4] . "</li>                        
            </ul>
            </div>";
    }
    ?>
    <h1>Matches for <?=$userName?></h1>
    <?php displayMatches();?>
    <?php
    include_once 'common.php';
    echo foot();
    ?>
</body>
</html>