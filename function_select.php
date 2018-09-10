<?php
function select()
{
  $a='';
  include('connect.php');
  $query_sel ="SELECT user_name, id FROM Users ";
  $result_sel = mysqli_query($con_str, $query_sel) or die("Ошибка " . mysqli_error($con_str));
  while ($row_sel = mysqli_fetch_array($result_sel)):
  $a .= '<option>'.$row_sel['user_name'].'</option>';
  endwhile;
  return $a;
  // code...
}
