<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $heigth = $_GET['height'];
    $weight = $_GET['weight'];
    if($_GET['response'] == 'nam'){
        if($heigth >= 160 && $weight >= 50){
            echo'Bạn đạt yêu cầu làm công ty';
        }
        else{
            echo'Bạn không đủ yêu cầu làm công ty';
        }

    }
    else{
        if($heigth >= 150 && ($weight >= 40 && $weight <= 70)){
            echo'Bạn đạt yêu cầu làm công ty';

        }
        else{
            echo'Bạn không đủ yêu cầu làm công ty';
        }
    }


    ?>
    
</body>
</html>