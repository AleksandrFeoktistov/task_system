<?php
require_once ('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>task system</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
<body>

<?php
include('connect.php');
$query ="SELECT name FROM tags";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
<?php while ($row = mysqli_fetch_array($result)):?>
<?php
echo $row['name'];
echo "</p>";
echo $splitword;
// if ($row['name']== $splitword) {echo "++";}
// else {
//   echo "-";
//   // code...
// }
?>
<?php endwhile; ?>
</body>
