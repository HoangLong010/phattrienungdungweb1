<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>
<body>

<form action= 'check.php' method = 'get'>
    <label for="days">Ngày:</label>
    <select id="days" name="days">
        <?php
        for ($day = 1; $day <= 31; $day++) {
            echo "<option value=\"$day\">$day</option>";
        }
        ?>
    </select>
    <label for="months">Tháng:</label>
    <select id="months" name="months">
        <?php
        for ($month = 1; $month <= 12; $month++) {
            echo "<option value=\"$month\">$month</option>";
        }
        ?>
    </select>
    <label for="years">Năm:</label>
    <select id="years" name="years">
        <?php
        $today = getdate();
        for ($year = 1900; $year <= $today['year']; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
        ?>
    </select>
    <button>Click!</button>

</form>

</body>
</html>
