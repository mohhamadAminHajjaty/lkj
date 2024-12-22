<?php
if(isset($_GET["num1"]))
{
    $n1=$_GET["num1"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function ab()
        {
            a=parseInt(document.getElementById("text1").value);
            re=0;
            while(a !=0)
            {
                re=re*10+a%10;
                a=Math.floor(a/10)
            }
            alert("مقلوب جواب"+re);
        }
        
    </script>
</head>
<body>
    <form action="maghloob.php" method="get">
        <input type="text" name="num1" id="text1">
    </form>
    <button onclick="ab()">فرآیند</button>
</body>
</html>