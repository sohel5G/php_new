<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break</title>
</head>
<body>
    <?php
        for ($i=1; $i <= 10; $i++) { 
            if($i === 5){
                break;
            }
            // if($i === 5) break;
            ?> 
                <li>user <?php echo $i ?> </li> 
            <?php
        }
    ?>
</body>
</html>