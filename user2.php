<?php
require_once ('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>users</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <?php  require_once ('nav.php');
  ?>
  </head>
  <?php
  include('is_allow.php');
  include ('connect.php');
$query ="SELECT * FROM Users ";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>
<div class="container">
  <div class="row">
    <div class="col-md">
      <div>
<table class="table table-borderless table-dark"> <!--стол -->
  <thead>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <tr>
      <th width="80" >ID</th>
      <th width="80" >login</th>
      <th width="80" >name</th>
      <th width="80" >del</th>
      <th width="80" >edit</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_array($result)): ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['Login'] ?></td>
          <td><?php echo $row['user_name'] ?></td>
          <td> <?php $select_id = $row['id'];
            if (is_allow('users','del',$select_id)): ?>
             <a href='del_users.php?id=<?php echo $row['id'] ?>'><?php echo 'delete' ?></a>
            <?php  endif; ?>
     </a></td>
       <td> <?php       $select = $row['id'];
         if (is_allow('users','red',$select_id)): ?>
          <a href='red_users.php?id=<?php echo $row['id'] ?>'><?php echo 'edit' ?></a>
         <?php  endif; ?>
  </a></td>
      </tr>
    <?php endwhile;?>
  </tbody>
</table>
</div>
 </div>
</div>
</div>
<p>
<p>
</body>
