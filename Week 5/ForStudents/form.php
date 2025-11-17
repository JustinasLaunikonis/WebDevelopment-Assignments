<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname"); 
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); 
    $sport = filter_input(INPUT_POST, "sport", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY); 
    $communication = filter_input(INPUT_POST, "communication"); 
    $sub = filter_input(INPUT_POST, "sub"); 

    var_dump($_POST); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Newsletter</title>
    <link rel="stylesheet" href="css/form.css" type="text/css">
</head>
<body>
    <div class="main">
        <h1>Sports Newsletter</h1>
        <hr>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">

            <p class="nomargin">Favorite sport?</p>
            <div>
                <label for="fencing">Fencing:</label>
                <input type="checkbox" name="sport[]" value="fencing" id="fencing">
                <label for="football">Football:</label>
                <input type="checkbox" name="sport[]" value="football" id="football">
                <label for="tennis">Tennis:</label>
                <input type="checkbox" name="sport[]" value="tennis" id="tennis">
                <label for="volleyball">Volleyball:</label>
                <input type="checkbox" name="sport[]" value="volleyball" id="volleyball">
                <label for="basketball">Basketball:</label>
                <input type="checkbox" name="sport[]" value="basketball" id="basketball">
            </div> 

            <label for="communication">Newsletter:</label>
            <select name="communication" id="communication">
                <option value="email">Email</option>
                <option value="cpigeon">Carrier pigeon</option>
                <option value="smoke">Smoke signals</option>
                <option value="telepathy">Telepathy</option>
            </select>

            <p class="nomargin">Subscription Tier</p>
            <div class="flexradio">
                <div>
                    <input type="radio" name="sub" id="tier1">
                    <label for="tier1">Tier 1: 10$</label>
                </div>
                <div>
                    <input type="radio" name="sub" id="tier2">
                    <label for="tier2">Tier 2: 25$</label>
                </div>
                <div>
                    <input type="radio" name="sub" id="tier3">
                    <label for="tier3">Tier 3: 49.99$</label>
                </div>
            </div>

            <div>
                <input type="submit" value="Send">
                <input type="reset" value="Reset">
                <button>Send it as well</button>
            </div>
        </form>
        <?php

            if(!empty($fname) && !empty($lname) && !empty($email))
            {
               if(!empty($sport))
               {
                     
               }

            }
            else
            {
                echo "Please provide all necessary information, including a valid email";
            }
        ?>
    </div>
</body>
</html>