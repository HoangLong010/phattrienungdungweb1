<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $items = array('item1.png', 'item2.png', 'item3.png', 'item4.png');
    foreach($items as $item){
        echo"<img src = 'images/$item' width = 50px height = 50px alt ='$item'>";
    }
    ?>
    <?php
        for($x = 1; $x <= 10; $x += 1){
            echo"<br>Day la so $x ";
        }
    ?>
    <?php
        $x = 1;
        while($x <= 10){
            echo"<br>Day la so: $x ";
            $x++;

        }
        
    ?>
    <?php
    $items = array('item1.png', 'item2.png', 'item3.png', 'item4.png');
    foreach($items as $item){
        echo"<img src = 'images/$item' width = 50px height = 50px alt ='$item'>";
    }
    ?>
    <h1>function</h1>
    <?php
    $items = array('item5.png', 'item6.png');
    foreach($items as $item){
        echo"<img src = 'images/$item' width = 50px height = 50px alt ='$item'>";
    }
    ?>
    <h1>Dinh Hoang Long 2121050394</h1>

</body>
</html>