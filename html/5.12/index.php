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
    mysqli_set_charset($conn, 'UTF8'); // sửa lỗi tiếng việt

    // Create sql to select data
    $sql = 'SELECT * FROM flights';

    $result = $conn-> query($sql);

    if($result->num_rows > 0) // kiểm tra có kết quả trả về (2D array)
    {
        while($row = $result-> fetch_assoc()) //cú pháp đọc từng raw của kết quả trả về
        {
            echo"FligtID: ".$row["id"].
                " Origin: ". $row["origin"].
                " Destination: ". $row["destination"].
                " Duration: ". $row["duration"]. "<br>";

        } 

    }
    else{
        echo"No flight in database";
    }
    $conn->close();

    ?>
    <h1>Dinh Hoang Long - 2121050394</h1>
    
</body>
</html>