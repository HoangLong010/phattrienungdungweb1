<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Currency exchange</h1>
    <form action="check.php" method='get'>
        <p>
            <label for="">Amount</label><br>
            <input type="number" name="money" id="">
        </p>
        <p>
            <label for="">Select currency</label><br>
            <select name="response" id="">
                <option value="USD">USD</option>
                <option value="AUD">AUD</option>
                <option value="JPY">JPY</option>
                <option value="EUR">EUR</option>
            </select>
            
        </p>
        <button>Convert</button>


    </form>
</body>
</html>