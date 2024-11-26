<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop</title>
</head>
<body>
    
    <h1>// While Loop</h1>
    <?php

       $x = 1; 
       while($x <= 10){
        echo $x++ . "<br/>";
       }

    ?>

    <form action="#">
        <h5>Choose Years</h5>
        <select name="#" id="#">

            <?php /*
                $year = 2000;
                while($year < 2024){
                    $year++;

                    ?> <option value="#">Years <?php echo $year ?></option> <?php

                }
            */?>
            
            <?php
                $year = 2000;
                while($year <= 2024){
                    $year ++;
                    echo "<option value='$year'>Years $year</option>";
                }
            ?>

        </select>
    </form>


    <h1>// Do While Loop</h1>

    <?php

        $count = 10;

        do {
            echo $count++ . "<br/>";
        } while( $count >= 20 );
     
    ?>

    

</body>
</html>