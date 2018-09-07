<?php
require_once('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
  <?php
require_once ('connect.php');
include ('nav.php');
$i = 0;
$query ="SELECT tags.id,tags.name , count(*) FROM tags JOIN tickets_tugs ON tickets_tugs.tugs_id = tags.id JOIN tickets ON tickets.id = tickets_tugs.ticket_id GROUP BY id ";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
        <?php while ($row = mysqli_fetch_array($result)):
          ?>
            <?php $i = $row['count(*)']?>
            <font style="font-size:<?php echo $i*10?>pt;"><a href ="/tags.php?id=<?php echo $row['id'] ?>"</a> <?php echo $row['name']?></font>
        <?php endwhile?>
        <td><a href="tag_create.php">new tag</a></td>
</body>
