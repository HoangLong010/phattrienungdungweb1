<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$string = $_GET['string'];
$chucai = $_GET['chucai'];

echo substr_count($string, $chucai);



?>

    
</body>
</html>