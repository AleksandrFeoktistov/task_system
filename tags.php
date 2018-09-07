<?php
require_once('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <?php
require_once ('connect.php');
include ('nav.php');
include ('function.php');
$select = $_GET['id'];
$query ="SELECT tickets.id, tickets.name, tickets.description,tickets.type,tickets.status,tickets.assigned_id,tickets.file,tickets.project_id,tickets.creater_id FROM tags JOIN tickets_tugs ON tickets_tugs.tugs_id = tags.id JOIN tickets ON tickets.id = tickets_tugs.ticket_id  WHERE tags.id = '$select'";
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
      <?php
      endwhile ?>
  </tbody>
</table>
</div>
</div>
</div>
