<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>not_operator</title>
</head>
<body>
    <?php

    $cart_item = true; 
    
    $show_cart_item =  $cart_item === !false ? "Cart Item is true" : "Cart Item is false";

    echo $show_cart_item; 

    ?>
</body>
</html>



