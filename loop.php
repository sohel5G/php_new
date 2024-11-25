<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop</title>
</head>
<body>
    
    <?php

       // While Loop

       $x = 1; 
       while($x <= 10){
        echo $x++ . "<br/>";
       }

    ?>

    <form action="#">
        <h1>Choose Years</h1>
        <select name="#" id="#">

            <?php 
                $year = 2000;
                while($year < 2024){
                    $year++;

                    ?> <option value="#">Years <?php echo $year ?></option> <?php

                }
            ?>

        </select>
    </form>


</body>
</html>