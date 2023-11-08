<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    
    
</head>
<body>
    

<?php

   echo'
  ';
   
    echo'<div class="w3-container w3-center w3-animate-top">';
    echo'<h1>Bạn đã đăng kí thành công</h1>';
    echo'</div>';
    echo'<div class="w3-container w3-center w3-animate-zoom">';
    echo'<h1>Tên của bạn là '. $_GET['first']. ' '. $_GET['last']. '</h1>';
    echo'<h1>Email: '. $_GET['email'].'</h1>';
    echo'<h1>Phone: ' . $_GET['phone'].'</h1>';
    






?>

    
</body>
</html>