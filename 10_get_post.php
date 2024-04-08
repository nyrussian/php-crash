<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// echo $_GET['username'];
// echo $_GET['name'];
if (isset($_POST['submit'])) {
  // echo '<h3>' . $_GET['username'] . '</h3>';
  echo '<h3>' . $_POST['username'] . '</h3>';
  echo''. $_POST['password'] . '<br>';
} ?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">reset</a><br><br>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad">MY Link</a><br><br>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="username">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>