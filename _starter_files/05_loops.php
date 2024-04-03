<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
// for ($x = 50; $x <= 60; $x++){
//   echo 'Number ' . $x . '<br>';
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$x = 10;

// while ( $x <=15) {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
// do {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// } while ($x <= 5);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$post = ['first post', 'second post', 'third post'];

// for ($x = 0; $x < count($post); $x++){
//   echo $post[$x] . '<br>';
// }

// foreach($post as $posts){
//   echo $posts . '<br>';
// }

$person = [
  'name' => 'brad',
  'age' => 35,
  'email'=> 'test@test.com'
  // 'hobbies' => ['golf', 'music'],
  // 'address' => [
  //   'street' => '123 main st',
  //   'city' => 'boston'
  // ]
];

foreach($person as $ket => $value){
  echo "$ket- $value <br>";
}

