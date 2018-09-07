<?php include('session_verify.php');
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
   <?php include ('connect.php');
   ?>
   <?php
   echo $_POST['name'];
  // echo $_POST['description'];
   $name = $_POST['name'];
  // $description = $_POST['description'];
   $query ="INSERT INTO tags VALUES (LAST_INSERT_ID(), '$name')";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
   ?>
   <?php
     header ( 'location: tags_tickets.php' )
     ?>
 </body>
</html>
