<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="local.project">Task system</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarText">
<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
    <a class="nav-link" href="local.project">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tags_tickets.php">tag tickets</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="user2.php">users</a>
  </li>
</ul>
<span class="navbar-text">
  <?php
  echo 'login:'. $_SESSION['login'].'<br>';
echo 'name:'.$_SESSION['user_name'].'<br>';
//var_dump($_SESSION);
 if ($_SESSION['is_admin'] == 0){ echo 'admin';}?>
<td><a href="/out.php">out</a></td>
<!-- <button name="out" onclick="<?php
// session_destroy()
// ?>
">go out</button>!-->
</span>
</div>
</nav>
