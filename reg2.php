<?php

require_once ('connect.php');
   $login = $_POST['login'];
   $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $name = $_POST['name'];

   $query = "INSERT INTO Users VALUES ('$login', '$hash','$name','2',LAST_INSERT_ID())";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));


  header('location: project.local');
