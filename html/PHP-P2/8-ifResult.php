<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo'THE GAME <br>';
    if($_GET['response'] == 'yes'){
        echo'HAS BEEN QUITED';  
    }
    if($_GET['response'] == 'no'){
        echo'WILL BE CONTINUED IN 3 SECONDS';
    }
    echo'<br>AFTER IS STATEMENT';
    ?>

    
</body>
</html>