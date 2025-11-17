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
    <title>Form Example</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Good Food - we have the good food.</h1>
        <h3>Order here</h3>
    </header>

    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname">
            
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname">
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="myname@example.com">
            
            <label for="textarea">Comments:</label>
            <textarea id="textarea" name="textarea" style="resize: none;"></textarea> 

            <h3>Dishes: </h3>
            <div>
                <label for="dish1">Noodles</label>
                <input type="checkbox" name="dish[]" value="Noodles" id="dish1">
            
                <label for="dish2">HotPot</label>
                <input type="checkbox" name="dish[]" value="HotPot" id="dish2">
            </div>
            
            <select name="dropdown" id="dropdown">
                <option value="email">Email</option>
                <option value="pigeon">Carrier Pigeon</option>
            </select>

            <h3>Packaging:</h3>
            <div class="flexradio">
                <div>
                    <input type="radio" name="package" id="pack1" checked="">
                    <label for="pack1">Paper</label>
                </div>
                <div>
                    <input type="radio" name="package" id="pack2">
                    <label for="pack2">Plastic</label>
                </div>
            </div>

            <div class="buttons">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
                <button>Submit this aswell</button>
            </div>
        </form>

        <?php
            $errors = [];
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($review)) {
                    $errors[] = "Comments cannot be empty.";
                } else {
                    $wordCount = str_word_count(trim($review));
                    if ($wordCount < 5) {
                        $errors[] = "Comments must contain at least 5 words.";
                    }
                }         
        
                if (!empty($errors)) {
                    echo "<ul style='color: red;'>";
                    foreach ($errors as $error) {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p style='color: green;'>Form Submitted Successfully!</p>";
                }
            }
        ?>
    </main>
</body>
</html>