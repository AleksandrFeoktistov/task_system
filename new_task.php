<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <body>
        <table>
          <tr>
        <form action = "new_task2.php" method="POST"> <!--указание метода GET-->
        <td>name task:<td> <td><input type="text" name="name"><td>
          <tr>
          <tr>
        <td>description:<td><td><input type="text" name="description"> <td><tr><tr>
        <td>type:<td><input type='radio' name='type' value='1'>task<td>
        <input type='radio' name='type' value='2'>bug<td>
          <tr>
            <tr>
      <td>status:<td><input type='radio' name='status' value='1'>new<td>
      <input type='radio' name='status' value='2'>in processes<input type='radio'name='status'value='3'>end<td>
          <tr>
          <tr>
              <td>assigned_id:<td><td><input type="text" name="assigned_id"><td>
          <tr>
          <tr>
              <td>file:<td><td><input type="text" name="file"><td>
          <tr>
          <tr>
               <td><td><td><input type="hidden" name="project_id" value="<?php echo $_GET['project_id'] ?>"><td>
          <tr>
          <tr>
                <td>creator_id:<td><td><input type="text" name="creater_id"><td>
          <tr>
          <tr>
          <td><td><td> <input type="submit" value = "create" name ""><td>
          <tr>
        </form>
      </table>
      </body>

</form>
  </body>
</html>
