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
    ?>
    <?php
    include('is_allow.php');
    ?>
<?php
$name_project=$_POST['name'];
$ticket_id=$_POST['ticket_id'];
var_dump($_POST);
$proj_id = $_POST['id'];
$query ="UPDATE comments SET text = '$name_project' WHERE id = '$proj_id'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
$row = mysqli_fetch_array($result);
    //  echo $ticket_id;
header ( "location: task.php?id=$ticket_id" );
//else header ( "location: not_q.php" );
       ?>
  </body>
</html>
