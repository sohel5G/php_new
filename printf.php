<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printf</title>
</head>
<body>
    
    <?php
        $var_name = "abdullah al alif";
        $school_name = "Kendua";

        printf("hello $var_name");
        echo "<br/>";

        $capital_Later = ucwords($var_name); // first case capital
        echo $capital_Later . "<br/>";

        printf("hello %s, What's your school name in %s?", $var_name, $school_name);


    ?>

</body>
</html>