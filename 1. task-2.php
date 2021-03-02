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
for ($i= 1000; $i<=9999; $i++){
    if ((intval($i)/1000%10 + intval($i)/100%10 +
            (intval($i)/10%10 + intval($i)%10))==$data){
        echo $i."<br>";
    }
}