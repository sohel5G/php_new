<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue Statement</title>
</head>
<body>
    <?php 
        for ($i=0; $i < 10; $i++) { 
            echo "PHP <br>";
           
            if($i != 6){
                echo "is <br>";
                echo "awesome <br><br><br>";
            }

        }
    ?>
</body>
</html>