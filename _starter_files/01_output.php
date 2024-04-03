<?php
/* -------- Output & Comments ------- */
// echo "hello 123";
// echo 123;
// echo "hello ", 123," ", 54.5;
// print 123;
// print_r([1,2,3]);
// var_dump('hello');
// var_export('hello');




/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

?>
<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <!-- You can output PHP including variables, etc -->
  <h1>Hello <?php echo 'Brad'; ?></h1>
  <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Hello <?= 'Brad' ?></h1>
  <h2> <?='test' ?></h2>
</body>
</html>