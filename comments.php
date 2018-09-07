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
      <div class="container">
  <div class="row">
    <div class="col-sm">
    <form action = "create_comments.php" method="POST"> <!--указание метода GET-->
text: <input type="text" name="name">
<input type="hidden" name="id_user" value="<?php echo $_SESSION['id']?>">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
 <!-- <input type="hidden" name="name">
 <input type="hidden" name="description"> -->
 <input type="submit" value="Отправить">
</form>
</div>
  </div>
</div>
  </body>
</html>
