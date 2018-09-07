<?php
function tickets_type($type)
{
  if ($type) {
echo 'task';
// code...
} else {
echo 'bug';
// code...
};}
function tickets_status($status)
{
  if ($status==0) {
       echo 'done';
   // code...
 } elseif ($status==1) {
      echo "in processes";
  } elseif ($status==2) {
      echo 'testing';
      // code...
  };
  // code...
}
