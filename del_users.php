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
$proj_id = $_GET['id'];
//var_dump($_GET);

$query ="SELECT * FROM Users WHERE id = '$proj_id'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
$row = mysqli_fetch_array($result);
$ticket_id = $row['id'];
$user_id = $row['id'];
$sel = is_allow('users','del',$user_id);
//var_dump($sel);
if (!$sel) { header ( "location: not_q.php" );}
$proj_id = $_GET['id'];
$query ="DELETE FROM Users WHERE id = '$proj_id'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
$row = mysqli_fetch_array($result);
    //  echo $ticket_id;
header ( "location: user2.php" );
       ?>
     </body>
</html>
