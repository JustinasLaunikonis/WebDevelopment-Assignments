<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areacodes</title>
</head>
<body>
    <?php
        $areacodes = array(14, 26, 12, 58, 34, 66, 7, 41);

        //Task 2a: 
        function findHighestNumber($areacodes)
        {
            $highest = max($areacodes);
            echo $highest. "<br>";
        }

        //Task 2b: Function that searches for a number within an array
        function searchForNumber($areacodes, $number)
        {
            if(in_array($number, $areacodes))
            {
                echo "Match Found - " .$number. "<br>";
            }
            else
            {
                echo "Match not Found! <br>";
            }
        }
        
        findHighestNumber($areacodes); //66
        searchForNumber($areacodes, 41); //Match Found - 41
        searchForNumber($areacodes, 44); //Match not Found!
    ?>
    
<!-- Advanced: Rewrite the search function of Task 2b, but expands the function
with the ability to search for multiple numbers. Give a comprehensive success and fail
message when applicable. The success message must include how many times the
number you are looking for has been found in the array. -->

</body>
</html>