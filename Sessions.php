<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <p >Model:<?php echo "$_SESSION[Model]"; ?></p>
            <p >description: <?php echo "$_SESSION[data]"; ?></p>
            <p >cost: <?php echo " $$_SESSION[price]"; ?></p>
</body>
</html>