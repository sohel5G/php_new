<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
</head>
<body>
    <?php
        for ($out=1; $out <= 5 ; $out++) { 
            echo "List $out <br/>";

            for ($in = 1; $in <= 6; $in++) { 
                echo "- List $in <br/>";
            }
        }
    ?>
</body>
</html>