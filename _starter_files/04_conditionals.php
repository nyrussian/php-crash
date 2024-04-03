<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 17;
// if ($age >=18) {
//   echo 'you are old enough';
// }else{
//   echo 'sorry you are to young';
// }

$t = date("H")+20;
// echo $t;
// IF ($t <12){
//   echo 'good morning';
// }elseif($t < 17){
//   echo 'good afternoon';
// }  else{
//   echo 'good eavning';
// }

// if(false){
//   echo 234;
// }else{
//   echo 556;
// }

$posts = ['post one', 'post two', 'post three'];
// if (!empty($posts)){
//   echo 'no posts found';
// }else{
//   echo $posts[0];
// }
/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $firstpost =  !empty($posts) ? $posts[0] : 'no posts found';
$firstpost = $posts[1] ?? null;
// echo $firstpost;

/* -------- Switch Statements ------- */

$favcolor = 'purple';
// switch ($favcolor) {
//   case 'red':
//     echo 'your favorite color is red';
//     break;

//   case 'blue':
//       echo 'your favorite color is blue';
//       break;
//    case 'green':
//         echo 'your favorite color is green';
//         break;
//     default:
//     echo 'your favorite color is something else';
        
// }
