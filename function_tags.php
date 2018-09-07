<?php
function tags_input($tags,$select_2)
{
  for ($i=0; $i < count($tags); $i++) {
  $tags_string = $tags[$i];
  include('connect.php');
  $query ="SELECT id FROM tags WHERE name = '$tags_string' ";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
  $row = mysqli_fetch_array($result);
  $tag_id = $row['id'];
  $query ="INSERT INTO tickets_tugs VALUES ('$select_2', '$tag_id')";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
}
}
function del_tags($select_2)
{
  include('connect.php');
  $query ="DELETE FROM tickets_tugs WHERE ticket_id = '$select_2'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
}
?>
<?php
function tags_uniq($tags22,$tags77)
{
   if ($tags22) {
   include('connect.php');
   $query ="INSERT INTO tags VALUES (LAST_INSERT_ID(), '$tags77')";
   $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));}
}
function input_function($task_id,$name,$desc,$type,$status,$assigned_id,$file,$project_id,$create_id)
{
  include('connect.php');
  $query ="UPDATE tickets SET name = '$name' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET description = '$desc' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET type = '$type' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET status = '$status' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET assigned_id = '$assigned_id' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET file = '$file' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET project_id = '$project_id' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET creater_id = '$create_id' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));

  $query ="UPDATE tickets SET creater_id = '$create_id' WHERE id = '$task_id'";
  $result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
}
