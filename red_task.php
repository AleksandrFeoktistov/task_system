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
  <body>
      <?php include ('nav.php');?>
    <?php
   $select = $_GET['id'];
    require_once ('connect.php');
    require_once('function_select.php');
   $query ="SELECT * FROM tickets WHERE id = '$select' ";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
   ?>
   <div class="container">
  <div class="row">
    <div class="col-sm">
      <div>
    <table>
      <thead>
      </thead>
        <?php while ($row = mysqli_fetch_array($result)): ?>

        <table>
          <tr>
        <form action = "red_task2.php" method="POST">
        <td>name task:<td> <td><input type="text" name="name" value="<?php echo $row['name'] ?>"><td>
          <tr>
          <tr>
        <td>description:<td><td><input type="text" name="description" value="<?php echo $row['description'] ?>"><td>
          <tr>
          <tr>
        <td>type:<td><td>task<input type="radio" name="type" <?php if($row['type']==1) echo"checked"?> value="1" >
          bug<input type="radio" name="type" <?php if($row['type']==2) echo"checked"?>  value="2"><td>
          <tr>
            <tr>
      <td>status:<td><td>new<input type="radio" name="status" <?php if($row['status']==1) echo"checked"?> value="<?php echo $row['name'] ?>">
           in processes<input type="radio" name="status" <?php if($row['status']==2) echo"checked"?> value="2">
             assigned<input type="radio" name="status" <?php if($row['status']==3) echo"checked"?> value="3"><td>
          <tr>
          <tr>
          <td>assigned_id:<td><td>
              <?php
              $query4 ="SELECT user_name, id FROM Users ";
              $result4 = mysqli_query($con_str, $query4) or die("Ошибка " . mysqli_error($con_str));
              ?>
               <select  name="assigned_id">
               <?php echo select(); ?>
               </select>
          <td>
          <tr>
          <tr>
              <td>file:<td><td><input type="text" name="file" value="<?php echo $row['file'] ?>"><td>
          <tr>
          <tr>
            <tr>
              <td><td><input type="hidden" name="project_id" value="<?php echo $row['project_id'] ?>"><td>
            <tr>

          <tr>
          <tr>
                <td>creator_id:<td><td><input type="text" name="creater_id" value="<?php echo $row['creater_id'] ?>"><td>
          <tr>
            <tr>
              <td><td><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"><td>
              <tr>
              <tr>
                <?php
                $ticketId = $_GET['id'];
                $tags = "";
                $query ="SELECT tickets_tugs.*, tags.name, tags.id FROM tickets_tugs JOIN tags ON tickets_tugs.tugs_id = tags.id WHERE ticket_id = '$ticketId'";
                $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
                ?>
                <?php
                $i=0;
                ?>
                <?php while ($row = mysqli_fetch_array($result)):?>
                    <?php
                       if ($i!=0) {
                         $e=",";
                       }
                       else $e=NULL;
                       $tags .= $e.$row['name'];
                       $i=$i+1;
                    ?>
                          <?php endwhile; ?>
                          <td>tags:<td><td><input type="text" name="tags" value="<?php echo $tags ?>"><td>
          <tr>
          <tr>
          <td><td><td> <input type="submit" value = "red" name ""><td>
          <tr>
          <?php endwhile ?>
        </form>
      </table>
    </div>
      </div>
    </div>
    </div>
      </body>

</form>
  </body>
</html>
