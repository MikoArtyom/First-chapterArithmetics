<html>
<head>

</head>
<body>
<p>2. Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.</p>
<form action="1.%20task-2.php" method="get">
    <input type="number" name="data">
    <input type="submit" value="Выполнить">
</form>

</body>
</html>
<?php
$data = $_GET["data"];
$sum = 0;
for ($i = 1000; $i <= 9999; $i++){
    $sum = 0;
    $value = $i;
    while ($value){
        $sum += $value % 10;
        $value = intval($value / 10);
    }

    if ($sum == $data){
        echo $i . "<br>";
    }
}