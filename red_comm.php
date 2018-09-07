<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
  </head>
  <body>
    <?php
   $select = $_GET['id'];
   //$user_id = $_GET['id'];
   include('connect.php');
   include('is_allow.php');
   $query ="SELECT * FROM comments WHERE id = '$select' ";
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

        <?php while ($row = mysqli_fetch_array($result)): ?>
          <?php
        $user_id = $row['user_id'];
        $sel = is_allow('comments','red',$user_id);
        if (!$sel) {header ('location: not_q.php');}
          ?>
      </tbody>
    </table>
    <?php
$a = $row['id'];
$b = $row['text'];
?>
<form class="form-inline" action="red_comm2.php" method="POST">
  <div class="form-group mb-2">
  <input class="form-control" type="text" name="name" value="<?php echo $row['text'] ?>" id="input1">
</div>
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>" id="input2">
  <input type="hidden" name="ticket_id" value="<?php echo $row['ticket_id'] ?>">
  <input class="btn btn-primary mb-2" type="submit" value="Отправить">
</form>



<?php endwhile;?>
</html>
