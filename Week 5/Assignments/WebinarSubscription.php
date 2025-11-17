<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $review = filter_input(INPUT_POST, "textarea");

    var_dump($_POST);  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webinar Subscription</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 style="margin-top: 20px;">Webinar Subscription</h1>
        <div class="border"></div>

        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

            <div class="box">
                <p><b>Name</b></p>
                <div class="inputs">
                    <div class="field">
                        <input type="text" name="fname" id="fname" style="width: 125px;">
                        <label for="fname">First Name:</label>
                    </div>

                    <div class="field">
                        <input type="text" name="lname" id="lname" style="width: 175px;">
                        <label for="lname">Last Name:</label>
                    </div>
                </div>
            </div>

            <div class="box">
                <p><b>E-mail</b></p>
                <div class="field">
                    <input type="email" name="email" id="email" placeholder="ex: myname@example.com" style="width: 350px;">
                    <label for="email">example@example.com</label>
                </div>
            </div>

            <div class="box">
                <p><b>Work Phone</b></p>
                <div class="inputs">
                    <div class="field">
                        <input type="text" name="wphone" id="wphone" style="width: 250px;">
                        <label for="wphone">Area Code</label>
                    </div>
                    <h4>-</h4>
                    <div class="field">
                        <input type="text" name="wphone2" id="wphone2" style="width: 250px;">
                        <label for="wphone2">Phone Number</label>
                    </div>
                </div>
            </div>

            <div class="box">
                <p><b>Company</b></p>
                <input type="text" name="company" id="company" style="width: 375px;">
            </div>

            <div class="box">
                <p><b>Company Address</b></p>
                <div class="field">
                    <input type="text" name="caddress" id="caddress" style="width: 400px;">
                    <label for="caddress">Street Address:</label>
                </div>

                <div class="field">
                    <input type="text" name="caddress2" id="caddress2" style="width: 400px;">
                    <label for="caddress2">Street Address Line 2:</label>
                </div>

                <div class="field">
                    <input type="text" name="caddress3" id="caddress3" style="width: 200px;">
                    <label for="caddress3">City:</label>
                </div>

                <div class="field">
                    <input type="text" name="caddress4" id="caddress4" style="width: 200px;">
                    <label for="caddress4">State / Province:</label>
                </div>

                <div class="field">
                    <input type="text" name="caddress5" id="caddress5" style="width: 200px;">
                    <label for="caddress5">Postal / Zip Code:</label>
                </div>
            </div>

            <div class="box">
                <p><b>Company Website</b></p>
                <input type="text" name="cwebsite" id="cwebsite" style="width: 375px;">
            </div>

            <div class="buttons">
                <input type="submit" value="Submit">
            </div>
        </form>

        

    </main>
</body>
</html>