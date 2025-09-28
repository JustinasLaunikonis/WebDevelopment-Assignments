<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapes</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        function printAsterisk()
        {
            echo "<b>*</b>";
        }

        function printAsteriskWithSpace()
        {
            echo "<b>*&nbsp;&nbsp;&nbsp;</b>";
        }

        function breakLine()
        {
            echo "<br>";
        }

        function number($integer)
        {
            echo " $integer ";
        }
    ?>

    <!-- 10 in a row -->
    <div class="rectangle">
        <?php
            for($i = 0; $i < 10; $i++)
            {
                printAsterisk();
            }
        ?>
    </div>

    <!-- 4 rows, 10 in a row -->
    <div class="rectangle">
        <?php
            for($i = 0; $i < 4; $i++)
            {
                for($j = 0; $j < 10; $j++)
                {
                    printAsterisk();
                }

                breakLine();
            }
        ?>
    </div>

    <!-- Staircase 1 to 10 -->
    <div class="rectangle">
        <?php
            $n = 10;
            for($i = 1; $i <= $n; $i++)
            {
                for($j = 0; $j < $i; $j++)
                {
                    printAsterisk();
                }
                breakLine();
            }
        ?>
    </div>
    
    <!-- Staircase 10 to 1 -->
    <div class="rectangle">
        <?php
            $n = 1;
            for($i = 10; $i >= $n; $i--)
            {
                for($j = 0; $j < $i; $j++)
                {
                    printAsterisk();
                }
                breakLine();
            }
        ?>
    </div>

    <!-- Assignment 5 -->
    <div class="rectangle">
        <?php
            $n = 7;
            for($i = 1; $i <= $n; $i++)
            {
                for($j = 0; $j < $i; $j++)
                {
                    printAsteriskWithSpace();
                }
                breakLine();
            }

            $n = 1;
            for($i = 6; $i >= $n; $i--)
            {
                for($j = 0; $j < $i; $j++)
                {
                    printAsteriskWithSpace();
                }
                breakLine();
            }
        ?>
    </div>
        
    <!-- Assignment 11 -->
    <div class="rectangle">
        <?php
            $n = 5;
            for($i = 1; $i <= $n; $i++)
            {
                for($j = 0; $j < $i; $j++)
                {
                    printAsteriskWithSpace();
                }
                breakLine();
            }
            
            for($i = 1; $i <= $n; $i++)
            {
                for($j = 0; $j < $i; $j++)
                {
                    printAsteriskWithSpace();
                }
                breakLine();
            }
        ?>
    </div>
</body>
</html>