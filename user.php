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
    <?php include ('nav.php');?>
  <?php
  $userid = $_GET['id'];
  require_once ('connect.php');
$query ="SELECT * FROM Users WHERE id = '$userid'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
<div class="container">
  <div class="row">
    <div class="col-md">

    <table class="table table-striped table-dark">  <!-- стол -->
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">login</th>
          <th scope="col">name</th>
          <th scope="col">is_admin</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($result)): ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['Login']?></td>
            <td><?php echo $row['user_name']?></td>
            <td><?php echo $row['is_admin']?></td>
          </tr>

        <?php endwhile;?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
