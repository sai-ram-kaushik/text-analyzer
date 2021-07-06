<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEXT-ANALYZER</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form name="text-analyzer" method="POST" action="./index.php" onsubmit="return validate()">
        <div class="container">
            <h1>TEXT ANALYZER</h1>
            <textarea name="analyzer" class="line" placeholder="Enter the text" id="line"></textarea>
            <input type="submit" value="submit" class="btn">
            <?php
                $line = $_POST['analyzer'];
                echo "The number of letters are:<br>";
                echo strlen ($line);
            ?>
        </div>
    </form>
    
</body>
<script src="./js/index.js"></script>
</html>