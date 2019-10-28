<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link href="nerdluv.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include_once 'common.php';
    echo head();
    ?>
    <form action="signup-submit.php" method="post">
        <fieldset>
            <legend>New User Signup:</legend>
            <ul>
                <li>
                    <label for="name" class="left column"><strong>Name:</strong></label>
                    <input type="text" name="name" id="name" value="" size="16" required='required'>
                </li>
                <li>
                    <label><strong>Gender:</strong></label>
                    <input type="radio" name="gender" id="male" value="M"><label for="male">Male</label><input type="radio" name="gender" id="female" value="F" checked><label for="female">Female</label>
                </li>
                <li>
                    <label><strong>Age:</strong></label>
                    <input type="text" name="age" min="0" and max="99" size="6">
                </li>
                <li>
                    <label><strong>Personality type:</strong>
                    </label><input type="text" name="personality" size="6" required='required' maxlength="4" pattern="[I,E][N,S][F,T][J,P]">
                    (<a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">Don't know your type?</a>)
                </li>
                <li>
                    <label><strong>Favorite OS:</strong></label>
                    <select name="favos">
                        <option selected>Windows</option>
                        <option>Linux</option>
                        <option>Mac OS X</option>
                    </select>
                </li>
                <li>
                    <label><strong>Seeking age:</strong></label>
                    <input type="text" name="seekingage" size="6" maxlength="2" value="min" pattern="[seekingage-99]">to<input type="text" name="seekingage1" size="6" maxlength="2" value="max" pattern="[0-9][0-9]">
                </li>
                <li>
                    <input type="submit" value="Submit">
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