<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" id = "fromsa">
        <label for="value1">مقدار اول:</label>
        <input type="text" id="value1" name="value1" required>
        <button type="submit" name="swapPHP">اجرا</button>
    </form>
</body>
</html>
<?php
    $score = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value1 = $_POST['value1'];
        if($value1 % $value1 == 0 || $value1 % 1 == 0){
            for ($i = 2;$i<$value1;$i++){
                if ($value1%$i == 0){
                    $score++;
                }
            }
            if ($score < 2){
                echo ("عدد اول است");
            }
            else{
                echo ("عدد اول نیست");
            }
        }

    }

?>
