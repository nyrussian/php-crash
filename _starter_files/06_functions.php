<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
function registerUser($email) {
  
  echo $email . 'user Registered';
}
// registerUser('Brad');

function sum($n1 = 4, $n2 = 8) {
  return $n1 + $n2;

}

$nub =  sum();
// echo $nub;

$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(10, 5);
// echo $subtract(10, 5);





