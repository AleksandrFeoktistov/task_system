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
$Login = $_POST['login'];
$name = $_POST['name'];
$pass = $_POST['password'];
$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
var_dump($_POST);
$proj_id = $_POST['id'];
$query ="UPDATE Users SET Login = '$Login', user_name = '$name', password = '$hash'  WHERE id = '$proj_id'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
$row = mysqli_fetch_array($result);
    //  echo $ticket_id;
header ( "location: user2.php" );
//else header ( "location: not_q.php" );
       ?>
  </body>
</html>
