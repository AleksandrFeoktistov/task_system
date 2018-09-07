<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
   $select = $_GET['project_id'];
   $con_str=mysqli_connect("127.0.0.1", "root", "test", "mydb");
   if (!$con_str) {
       echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
       echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
       echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
       exit;
   }
   $query ="SELECT * FROM project WHERE project_id = '$select' ";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
   ?>
    <table class="table table-striped table-dark">
      <thead>
        <style>
        table {
        border: solid 1px blue;
        border-collapse: collapse;}
        td {border: solid 1px blue;}
        th {border: solid 1px blue;}
        </style>
        <tr>
          <th>ID</th>
          <th>Name</th>
        </tr>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($result)): ?>
          <tr>
            <td><?php echo $row['project_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <!-- <form action="edit2.php" metod="POST"> -->
            <!-- Name project: <input type="text" name="name1" value="<?php echo $row['name'] ?>"> -->
            <!-- description project: <input type="text" name="description1" value="<?php echo $row['description'] ?>"> -->
            <!-- <input type="submit" value="Отправить"> -->
            <!-- </form> -->

          </tr>
          <?php
          ?>
      </tbody>
    </table>
    <?php
$a = $row['name'];
$b = $row['description'];
?>
<form action="edit2.php" method="POST">
  Name project: <input type="text" name="name" value="<?php echo $row['name'] ?>" id="input1">
  <input type="hidden" name="project_id" value="<?php echo $row['project_id'] ?>">
  description project: <input type="text" name="description1" value="<?php echo $row['description'] ?>" id="input2">
  <input type="submit" value="Отправить">
</form>



<!-- <form action = "edit2.php" method="POST"> <!--указание метода GET-->
<!-- Name project: <input type="text" name="name"> -->
<!-- description project: <input type="text" name="description"> -->
<!-- <input type="submit" value="Отправить"> -->
<!-- </form> -->
<?php endwhile;?>
</html>
