<?php
function select()
{
  $con_str=mysqli_connect("127.0.0.1", "root", "test", "mydb");
  if (!$con_str) {
      echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
      echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
      exit;

  $query4 ="SELECT user_name, id FROM Users ";
  $result4 = mysqli_query($con_str, $query4) or die("Ошибка " . mysqli_error($con_str));
  return $result4;
  // code...
}
