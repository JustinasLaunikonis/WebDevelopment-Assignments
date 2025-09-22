<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Numbers</title>
</head>
    <body>

    <?php
        function compareToHundred($number)
        {
            if ($number > 100)
            {
                return "$number is higher than 100.<br>";
            }
            elseif ($number < 100)
            {
            return "$number is lower than 100.<br>";
            }
            else
            {
                return "$number is equal to 100.<br>";
            }
        }

        echo compareToHundred(150);
        echo compareToHundred(50);
        echo compareToHundred(100);
        ?>
    
    </body>
</html>