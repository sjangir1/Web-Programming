<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matches</title>
    <link href="nerdluv.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include_once 'common.php';
    echo head();
    ?>
    <form action="matches-submit.php" method="get">
        <fieldset>
            <legend>Returning User:</legend>
            <ul>
                <li><label><strong>Name:</strong></label>
                <input type="text" name="name" value="" size="16" required="required">
            </li>
            <li>
                <input type="submit" value="Veiw My Matches">
            </li>
            </ul>
        </fieldset>
    </form>
    <?php
    include_once 'common.php';
    echo foot();
    ?>
</body>
</html>