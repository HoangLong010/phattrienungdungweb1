<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    if($number1 > $number2){
        $solonhon = $number1;
    }
    else{
        $solonhon = $number2;
    }
    echo'Số lớn hơn là:'. $solonhon;
    ?>
    
</body>
</html>