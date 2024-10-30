<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator</title>
</head>
<body>
    
    <?php

        $user = "";
        $age = 18;

        if ($age > 16) {
            $user = "Admin";
        }else {
            $user = "Guest";
        }

        echo $user;

        echo "<br/>";

        $user = ( $age > 16 ) ? "Admin" : "Guest";
        echo $user;

    ?>

</body>
</html>