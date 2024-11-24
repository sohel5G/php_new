<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&&_Operator</title>
</head>
<body>
    
    <?php

        $age = 20;
        $class = 13;
        $name = "Araf";

        $user = ($age > 18 && $name === "Araf") ? "This is Abdullah Al Araf" : "This is not Abdullah Al Araf";

        echo $user;


    ?>


</body>
</html>