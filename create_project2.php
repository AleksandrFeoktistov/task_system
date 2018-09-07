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
    $con_str=mysqli_connect("127.0.0.1", "root", "test", "mydb");
    if (!$con_str) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo $_POST['name'];
    echo $_POST['description'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $query ="INSERT INTO project VALUES (LAST_INSERT_ID(), '$name','$description')";
    $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
    ?>
    <?php
      header ( 'location: project.local' )
      ?>
  </body>
</html>
