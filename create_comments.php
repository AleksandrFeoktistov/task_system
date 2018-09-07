<?php
require_once ('session_verify.php');
?>
<!DOCTYPE html>
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
     require_once ('connect.php');
     var_dump($_POST);
   $text = $_POST['name'];
   $comments_id = $_POST['id'];
   $user_id = $_POST['id_user'];
   $query ="INSERT INTO comments VALUES ('$comments_id','$text' ,'$user_id',LAST_INSERT_ID())";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
   ?>
   <?php
   $a = 'task.php?id='.$_POST['id'];
   echo $a;
 header ("location: /$a")
     ?>
 </body>
</html>
