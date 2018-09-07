<?php
$con_str=mysqli_connect("127.0.0.1", "root", "test", "mydb");
if (!$con_str) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$query ="SELECT * FROM project";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($link));
  while($row = mysqli_fetch_array($result)){
    $id=$row['id'];
    $name=$row['name'];
    echo $id;
    echo "\n";
    echo $name;
    echo "\n";
    }
 mysqli_close($con_str);
?>
