<!DOCTYPE html>
<?php
var_dump($_GET);


?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <?php
    $con_str=mysqli_connect("127.0.0.1", "root", "test", "mydb");
    if (!$con_str) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    ?>
<?php
$task_id = $_GET['id'];
$query ="DELETE FROM tickets WHERE id = '$task_id'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
      <?php
      ?>
      <?php
header ( 'location: project.local' )
       ?>
  </body>
</html>
