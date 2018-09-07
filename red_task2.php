<?php
require_once ('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<body>
    <?php include ('nav.php');?>
  <?php
  require_once ('connect.php');
  ?>
  <?php
  include('function_tags.php');
  ?>
<?php
$select7 = $_POST['id'];
$select_2 = $_POST['id'];
var_dump($_POST);
$t = $_POST['tags'];
$tags = explode(",", $t);
$query = "SELECT name FROM tags";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
<?php
$i = -1;
$tag2 = array();
?>
<?php while ($row = mysqli_fetch_array($result)):?>
<?php
//echo $row['name'];
$i += 1;
$tag2[$i] = $row['name'];
?>
<?php endwhile; ?>
<?php
//var_dump($tag2);
var_dump($tags); //теги введенные
$tags22 = array_diff ($tags, $tag2);//var_dump($tags22);
$tags77 = implode($tags22);
//var_dump($tags77);
tags_uniq($tags22,$tags77);
// if ($tags22) {
// $query ="INSERT INTO tags VALUES (LAST_INSERT_ID(), '$tags77')";
// $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
// }
//else echo "нет новых тегов";
// tickets_tags
$query ="SELECT id FROM tags WHERE name = '$tags77'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
<?php while ($row = mysqli_fetch_array($result)):?>
  <?php
  echo $row['id'];
  ?>
<?php
$sel = $row['id'];
$query ="INSERT INTO tickets_tugs VALUES ('$select7', '$sel')";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
endwhile;
$tags22 = array_diff ($tag2, $tags);var_dump($tags22);
// удаление тикеттегов
del_tags($select_2);
//tags
tags_input($tags,$select_2);
$task_id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['description'];
$type = $_POST['type'];
$status = $_POST['status'];
$assigned_id = $_POST['assigned_id'];
$file = $_POST['file'];
$project_id = $_POST['project_id'];
$create_id = $_POST['creater_id'];
//функция ввода
input_function($task_id,$name,$desc,$type,$status,$assigned_id,$file,$project_id,$create_id);
?>
    <?php
//header('location: /project.local');
     ?>
</body>
