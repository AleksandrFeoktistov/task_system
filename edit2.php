<!DOCTYPE html>
<?php
echo 'name: ';
var_dump($_POST['name']);
echo 'Description1: ';
var_dump($_POST['description1']);
echo 'POST: ';
var_dump($_POST);

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
      <?php include ('nav.php');?>
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
$proj_id = $_POST['project_id'];
$name_project = $_POST["name"];
$a = $_POST["description"];
$query ="UPDATE project SET name = '$name_project' WHERE project_id = '$proj_id'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
$query ="UPDATE project SET description = '$name_project' WHERE project_id = '$proj_id'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
      <?php
      ?>
      <?php
header ( 'location: project.local' )
       ?>
  </body>
</html>
