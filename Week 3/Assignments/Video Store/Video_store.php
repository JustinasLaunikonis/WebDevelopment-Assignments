<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Store</title>
</head>
<body>
    <?php
        function Conditions($age, $gender, $recentlyVisited)
        {
            if($age < 18 && $gender == "Female" && $recentlyVisited)
            {
                echo "<div style='color: red; font-weight: bold'>WARNING!!!</div>";
                return;
            }

            if($age < 18)
            {
                echo "The User is not old enough to register. <br>";
            }

            if($gender == "Female")
            {
                echo "There is an upcoming ladies night event in the video store! <br>";
            }

            if($recentlyVisited)
            {
                echo "A discount will be applied during checkout, you have visited the site before. <br>";
            }
        }

        Conditions(20, "Female", TRUE);
        echo "============================= <br>";
        Conditions(18, "Male", TRUE);
        echo "============================= <br>";
        Conditions(17, "Female", FALSE);
        echo "============================= <br>";
        Conditions(8, "Female", TRUE);
        echo "============================= <br>";
    ?>
</body>
</html>