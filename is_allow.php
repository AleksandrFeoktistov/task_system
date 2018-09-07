<?php
require_once('session_verify.php');
//var_dump($_SESSION);
function is_allow($object, $do, $select_id)
{
  if ($_SESSION['is_admin'] == 0) {
    switch ($object) {
      case 'comments':
        if ($do=='del') {
          return TRUE;
        }
        if ($do=='red' && $select_id==$_SESSION['id']) {
          return TRUE;
        }
        break;

      case 'users':
        if ($do == 'del') {
          return TRUE;
        }
        if ($do == 'red') {
          return TRUE;
        }
        break;
    }
  } else {
    switch ($object) {
      case 'comments':
        if ($do=='del' && $select_id==$_SESSION['id']) {
          return TRUE;
        }
        if ($do=='red' && $select_id==$_SESSION['id']) {
          return TRUE;
        }
        break;

      case 'users':
        if ($do=='del' && $select_id==$_SESSION['id']) {
          return TRUE;
        }
        if ($do=='red' && $select_id==$_SESSION['id']) {
          return TRUE;
        }
        break;
    }
  }

  return false;
}
