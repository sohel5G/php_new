<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OR Operator</title>
</head>
<body>

<a href="https://atlasworxs.com/terms-conditions/">Terms</a>and<a href="https://atlasworxs.com/privacy-policy/">Privacy Policy</a>

    <?php
          $user = "";
          $age = 14;
          $class = 12;
  
          $user = ( $age > 16 || $class > 14 ) ? "Admin" : "Guest";
          echo $user;
    ?>
</body>
</html> 