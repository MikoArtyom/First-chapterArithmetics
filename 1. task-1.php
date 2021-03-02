<html>
<head>

</head>
<body>
<p>1. Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.</p>
<form action="1.%20task-1.php" method="get">
    <input type="number" name="data">
    <input type="submit" value="Выполнить">
</form>

</body>
</html>
<?php
$data = $_GET["data"];
$count = 0;
while ($data != 0){
    if (($data%10)<5)
        $count++;

        $data /= 10;
        $data = intval($data);
}
echo $count;
?>