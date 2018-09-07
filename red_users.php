<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <?php
 include('session_verify.php');
 include('nav.php');
 ?>
  </head>
  <body>
    <?php
   $select = $_GET['id'];
   $user_id = $_GET['id'];
   include('connect.php');
   include('is_allow.php');
   $query ="SELECT * FROM Users WHERE id = '$select' ";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
   ?>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
        </tr>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      </thead>
      <tbody>
        <?php
        $sel=is_allow('users','red',$user_id);
        if ($sel != 'red') {header ('location: not_q.php');}
          ?>
        <?php while ($row = mysqli_fetch_array($result)): ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['user_name'] ?></td>
          </tr>
          <?php
          ?>
      </tbody>
    </table>
    <?php
$a = $row['id'];
$b = $row['user_name'];
?>
<form class="form-inline" action="red_tickets2.php" method="POST">
  <div class="form-group mb-2">
  <input class="form-control" type="text" name="name" value="<?php echo $row['user_name'] ?>" id="input1">
</div>
<div class="form-group mb-2">
  <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'] ?>">
</div>
  <div class="form-group mb-2">
  <input class="form-control" type="text" name="login" value="<?php echo $row['Login'] ?>" id="input2">
</div>
  <div class="form-group mb-2">
  <input class="form-control" type="text" name="password" placeholder="<?php echo 'parol' ?>">
</div>
  <div class="form-group mb-2">
  <input class="form-control" type="hidden" name="is_admin" value="<?php echo $row['is_admin'] ?>">
</div>
  <input class="btn btn-primary mb-2" type="submit" value="Отправить">
</form>



<?php endwhile;?>
</html>
