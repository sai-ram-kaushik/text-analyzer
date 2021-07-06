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
            <textarea name="data" class="line" placeholder="Enter the text" id="box"></textarea>
            <input type="submit" value="submit" class="btn">
            <p>The length of the string is:<br>
                <?php
                error_reporting(0);
                $data = $_POST['data'];
                echo strlen ($data);
            ?>
            </p>
            <p1>The number of the words are:<br>
                <?php
                    error_reporting(0);
                    $data = $_POST['data'];
                    echo str_word_count ($data);
                ?>
            </p1>
        </div>
    </form>
    
</body>
<script src="./js/index.js"></script>
</html>