<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constants.php</title>
</head>
<body>

<h4>

    <?php

    define("NAME", "Sohel Rana");

    echo "Your name is " . NAME;
    echo "<br/>";
    echo "Your name is " . constant("NAME");

    ?> 

</h4>

</body>
</html>