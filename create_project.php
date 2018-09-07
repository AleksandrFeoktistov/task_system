<?php
require_once ('session_verify.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>create project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
  </head>
  <body>
    <?php include ('nav.php');?>
    <form class="form-inline" action="create_project2.php" method="POST">
    <form class="form-inline">
      <div class="form-group mb-2">
        <input type="text" name="name" placeholder="Name project:" class="form-control">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <input type="text" name="description" class="form-control" placeholder="description project:" id="l">
      </div>
      <button type="submit" class="btn btn-primary mb-2" value= "отправить">create</button>
    </form>
  </body>
</html>
