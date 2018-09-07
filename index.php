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
     include ('nav.php');
 ?>
<br>
<br>
    <?php
    include ('connect.php');
    $query ="SELECT * FROM project ";
    $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
    ?>
    <div class="container-fluid">
      <div class = "row">
      <div class="col-md-12">
        <table class="table table-striped table-dark">  <!-- стол -->
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">edit</th>
              <th scope="col">del</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_array($result)): ?>
              <tr>
                <td><?php echo $row['project_id'] ?></td>
                <td><a href="/project.php?project_id=<?php echo $row['project_id'] ?>"><?php echo $row['name'] ?></a></td>
                <td><a href="/edit.php?project_id=<?php echo $row['project_id'] ?>">Edit</a></td>
                <td><a href="/delete.php?project_id=<?php echo $row['project_id'] ?>">Delete</a></td>
              </tr>
            <?php endwhile;?>
          </tbody>
          <button name="write" class="j-submit-report" onclick="window.location.href='create_project.php'">Create project</button>
        </table>
          <!-- <button name="write" class="j-submit-report" onclick="window.location.href='user2.php'">users</button> -->
      </div>
    <p>
    <p>
      <?php
       ?>
    <p>
    <p>
</html>
