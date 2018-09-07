<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php
    require_once ('connect.php');
        $log = $_POST['login'];
      $query ="SELECT * FROM Users WHERE Login = '$log'";
      $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
      ?>
      <table>
      <table class="table table-striped table-dark">  <!-- стол -->
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">login</th>
            <th scope="col">password</th>
            <th scope="col">is_admin</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($result)): ?>
            <tr>
              <td><?php echo $row['id']; ?><td>
              <td><?php echo $row['user_name']; ?><td>
                <td><?php echo $row['Login']; ?><td>
                  <td><?php echo $row['password']; ?><td>
                    <?php $password=$_POST['password'];?>
                <?php if ($_POST['login']==$row['Login']  &password_verify($password, $row['password']))
                  {echo "вы вошли в систему";
                  session_start();
                  $_SESSION['user_name'] = $row['user_name'];
                  $_SESSION['is_admin'] = $row['is_admin'];
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['login'] = $row['Login'];
        header ('location: project.local');
                }
                else header ('location: login_login.php');
                ?>
            </tr>
          <?php endwhile;?>
      <tr>
  </table>
  </body>
</html>
