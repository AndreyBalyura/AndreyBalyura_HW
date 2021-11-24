<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $t =  date("H:i");
    if (date("8:00") <= $t && $t < date("20:00")){
        echo '<img src="../HW 24.11.21/images/5.jpg">';
    }
    else
        echo '<img src="../HW 24.11.21/images/4.jpg">';
    ?>
</body>
</html>