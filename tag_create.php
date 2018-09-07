<?php
require_once ('session_verify.php');
?>
<?php include('nav.php');
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
 <body>
    <form class="form-inline" action="tag_create2.php" method="POST">
        <input type="text" name="name" class="form-control" >
      <button type="submit" value= "отправить">create</button>
    </form>
  </body>
</html>
