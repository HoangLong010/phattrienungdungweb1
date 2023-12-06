<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  require 'connect.php';
    //  mysqli_set_charset($conn, 'UTF8');

    //  $sql = "DELETE FROM flights WHERE id= '1'";

    //  if($conn->query($sql)=== TRUE)
    //  {
    //     echo"Ticket with id = 1 has been deleted";
    //  }
    //  else
    //  {
    //     echo"Error: ". $sql . "<br>" . $conn->error;

    //  }
    //  $conn-> close();

    ?>
    <?php
        echo"<form method ='post' action = ''>";
        require 'connect.php';
        mysqli_set_charset($conn, 'UTF8');

        $sql = "SELECT * FROM passengers";
        $result = $conn -> query($sql);
        
            echo"<table border ='1'>
                <caption>Sold Ticket</caption>
                <tr>
                    <th>Select</th>
                    <th>Passenger Name</th>
                    <th>Flight ID</th>
                </tr>";
            while($row = $result->fetch_assoc()){   
                echo"<tr><td> <input type =checkbox name='checkbox[]' value ='" . $row['id']. "'>" ."</td>".
                    "<td>" . $row["name"] . "</td>". 
                    "<td>" . $row["flights_id"]. "</td></tr>";
            }
            
        
        echo'<input type="submit" name ="delete" value = "CANCEL TICKET" /> </form>';
        
    ?>
    <?php
        if(isset($_POST['delete']))
        {
            if(isset($_POST['checkbox']))
            {
                $chkarr = $_POST['checkbox'];
                foreach($chkarr as $id)
                {
                    $sql = "DELETE FROM passengers WHERE id ='$id'";
                    $result = $conn -> query($sql);
                    // header("location: 5-delete2.php");
                    echo"Da huy cac ve duoc chon";
                }
            }
        }
        $conn->close(); 
    ?>
</body>
</html>