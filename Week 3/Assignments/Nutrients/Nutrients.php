<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrients</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        function checkNutrients($calories, $carbs, $protein, $fat, $dietStatus)
        {
            echo "<h2>Nutritional Information</h2>";
            echo "<ul>";
            echo "<li>Calories: $calories kcal</li>";
            echo "<li>Carbs: $carbs g</li>";
            echo "<li>Protein: $protein g</li>";
            echo "<li>Fat: $fat g</li>";

            if ($dietStatus) {
                echo "<li>Diet approved</li>";
            } else {
                echo "<li>Diet disapproved</li>";
            }
            
            echo "</ul>";
        }

        checkNutrients(250, 100, 70, 50, TRUE);
        checkNutrients(230, 120, 650, 20, FALSE);
        ?>
</body>
</html>