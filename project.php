<?php
require_once ('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>project</title>
  </head>
  <body>
      <?php require_once ('connect.php');?>
    <?php
     $select = $_GET['project_id'];
    $query ="SELECT * FROM project WHERE project_id = '$select' ";
    $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
    ?>
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <table class="table table-borderless table-dark"> <!--стол -->
      <thead>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <tr>
          <th width="80" >ID</th>
          <th width="80" >Name</th>
          <th width="80" >Description</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($result)): ?>
          <tr>
            <td><?php echo $row['project_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['description'] ?></td>
          </tr>
        <?php endwhile;?>
      </tbody>
    </table>
  </div>
</div>
</div>
  <?php  $query ="SELECT tickets.*, Users.Login FROM tickets JOIN Users ON Users.id = tickets.assigned_id  WHERE project_id = 48;";
    $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
    ?>
    <p>
  <div class="container">
  <div class="row">
    <div class="col-sm">
    <table class="table table-borderless table-dark">
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
              <td><?php if ($row['type']==1) {echo 'task';
                // code...
              } else {echo 'bug';
                // code...
              }
               ?>
              <td><?php if ($row['status']==0) {echo 'done';
                // code...
              }
              else if ($row['status']==1) {echo "in processes";}
              else if ($row['status']) {echo 'testing';
                // code...
              }
               ?>
               <td><a href="user.php?id=<?php echo $row['assigned_id'] ?>"><?php echo $row['Login']?></a></td>
               <td><?php echo $row['file'] ?></td>
               <td><?php echo $row['project_id'] ?></td>
               <td><a href="user.php?id=<?php echo $row['creater_id'] ?>"><?php echo $row['Login']?></a></td>
               <td><a href="task.php?id=<?php echo $row['id'] ?>">подробнее</a><td>
          </tr>
        <?php endwhile;?>
      </tbody>
      <td><a href="new_task.php?project_id=<?php echo $_GET['project_id'] ?>">create new</a><td>
    </table>
  </div>
</div>
</div>
  </body>
</html>
