<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $money = $_GET['money'];
    if($_GET['response'] == 'USD'){
        $change = $money * 23000;
        echo'Giá trị đổi sang USD: '. $change;
    }
    if($_GET['response'] == 'AUD'){
        $change = $money * 17000;
        echo'Giá trị đổi sang AUD: '.$change;
    }
    if($_GET['response'] == 'JPY'){
        $change = $money * 200;
        echo'Giá trị đổi sang JPY: '.$change;
    }
    if($_GET['response'] == 'EUR'){
        $change = $money * 27000;
        echo'Giá trị đổi sang EUR: '.$change;
    }


    ?>
</body>
</html>