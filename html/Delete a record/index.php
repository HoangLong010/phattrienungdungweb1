<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require 'connect.php';
     mysqli_set_charset($conn, 'UTF8');

     $sql = "DELETE FROM passengers WHERE id= '1'";

     if($conn->query($sql)=== TRUE)
     {
        echo"Ticket with id = 1 has been deleted";
     }
     else
     {
        echo"Error: ". $sql . "<br>" . $conn->error;

     }
     $conn-> close();

    ?>
   
</body>
</html>