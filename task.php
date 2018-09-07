<?php
require_once('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>task</title>

  </head>
  <body>
    <?php include('nav.php'); ?>
    <?php include('function.php'); ?>
    <?php include('is_allow.php'); ?>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <?php
     $select = $_GET['id'];
      require_once('connect.php');
    $query ="SELECT * FROM tickets WHERE id = '$select' ";
    $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
    ?>
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <table class="table table-striped table-dark">
      <thead>

      </thead>
    </table>
    <p>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Task/Bug</th>
          <th>Status</th>
          <th>assigned_id</th>
          <th>file</th>
          <th>project_id</th>
          <th>creator_id</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($result)): ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['description'] ?></td>
              <td><?php tickets_type($row['type'])?>
              <td><?php tickets_status($row['status'])?>
                <td><?php echo $row['assigned_id'] ?></td>
                <td><?php echo $row['file'] ?></td>
                <td><?php echo $row['project_id'] ?></td>
                <td><?php echo $row['creater_id']?></td>
                  <td><a href="red_task.php?id=<?php echo $row['id'] ?>">red</a><td>
                    <td><a href="del_task.php?id=<?php echo $row['id'] ?>">del</a><td>
          </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
    <?php
    $query ="SELECT * FROM comments WHERE ticket_id = '$select' ";
    $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
    ?>
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <table class="table table-striped table-dark">
      <thead>
      </thead>
    </table>
    <p>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th>text</th>
          <th>id</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
      //  var_dump($_SESSION);
        ?>
        <?php while ($row = mysqli_fetch_array($result)): ?>
          <tr>
            <td><?php echo $row['text'] ?></td>
            <td><?php echo $row['user_id'] ?></td>
            <td>
              <?php $select_id = $row['user_id'];
                  if (is_allow('comments','del',$select_id)): ?>
                <a href='del_com.php?id=<?php echo $row['id'] ?>'><?php echo 'del' ?></a>
              <?php  endif; ?>
            </td>
            <td> <?php
              if (is_allow('comments','red',$select_id)): ?>
               <a href='red_comm.php?id=<?php echo $row['id'] ?>'><?php echo 'red' ?></a>
              <?php  endif; ?>
            </td>
            </tr>
        <?php endwhile;?>
<?php endwhile;?>
<a href="comments.php?id=<?php echo $_GET['id'] ?>">создать комментарий</a>
<?php
include('tags2.php');
?>
</tbody>
</div>
</div>
</div>
</html>
<?php
//switch ($_SESSION['is_admin'])  {
//case '0':echo 'del';
//   break;
// default:
// switch ($_SESSION['id'])  {
//   case "$select":echo 'del';
//   break;
// }}
