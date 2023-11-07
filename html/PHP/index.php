<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body>

<div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>Input Colors</h2>
  </div>
  <form class="w3-container" action="/action_page.php">
    <p>      
    <label class="w3-text-brown"><b>First Name</b></label>
    <input class="w3-input w3-border w3-sand" name="first" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Last Name</b></label>
    <input class="w3-input w3-border w3-sand" name="last" type="text"></p>
    <p>
    <button class="w3-btn w3-brown">Register</button></p>
  </form>

  <?php
    echo"MY FIRST PHP FILE";
    echo"<h3>Hello World</h3>";
    echo"<select>";
    echo"<option>1</option>";
    echo"<option>2</option>";
    echo"</select>";
    echo"Đinh Hoàng Long 2121050394";
    $longAccount = 10000000;
    echo"Số tiền trong tài khoản Long: $longAccount";
    $HUMGPay = 10000000;
    echo"HUMG chuyển tiền: $HUMGPay";
    $longAccount = $longAccount + $HUMGPay;
    echo"Số tiền trong tài khoản Long: $longAccount";  

   
  ?>

</div>

</body>
</html> 
