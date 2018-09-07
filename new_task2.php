<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
   <link href="style.css" rel="stylesheet" type="text/css">
   <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
   <?php
var_dump ($_POST);
    ?>
   <?php
   $con_str=mysqli_connect("127.0.0.1", "root", "test", "mydb");
   if (!$con_str) {
       echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
       echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
       echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
       exit;
   }
   echo $_POST['name'];
   echo $_POST['description'];
   $name = $_POST['name'];
   $description = $_POST['description'];
   $type = $_POST['type'];
   $status = $_POST['status'];
   $assigned_id = $_POST['assigned_id'];
   $file = $_POST['file'];
   $creater_id = $_POST['creater_id'];
   $project_id = $_POST['project_id'];
   $query ="INSERT INTO tickets VALUES ('$name', '$description','$type','$status','$assigned_id','$file','$project_id',LAST_INSERT_ID(),'$creater_id')";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
   ?>
   <?php
      $proj_id = $project_id;
     header ( "location: project.php?project_id=$proj_id" )
     ?>
 </body>
</html>
