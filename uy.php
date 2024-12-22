<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جمع اعداد</title>
</head>
<body>
    <h1>محاسبه مجموع اعداد</h1>
    <input type="number" id="numberInput" placeholder="عدد را وارد کنید">
    <button id="addButton">اضافه کردن</button>
    <button id="calculateButton">محاسبه مجموع</button>
    <p id="result"></p>

    <script>
        let numbers = [];

        document.getElementById('addButton').addEventListener('click', function() {
            const input = document.getElementById('numberInput').value;
            if (input !== '') {
                numbers.push(Number(input));
                document.getElementById('numberInput').value = ''; // پاک کردن ورودی
                alert('عدد به لیست اضافه شد.');
            } else {
                alert('لطفاً یک عدد وارد کنید.');
            }
        });

        document.getElementById('calculateButton').addEventListener('click', function() {
            const sum = numbers.reduce((acc, curr) => acc + curr, 0);
            document.getElementById('result').innerText = 'مجموع اعداد: ' + sum;
        });
    </script>
</body>
</html>
