<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
$numbers = [1,2,3,4,5];
$fruits = array('apple', 'orange', 'grape');

// print_r($numbers)
// echo $fruits[1];
//associative arrays
$colors = [
  1=> 'red',
  4=> 'blue',
  6=> 'green'
];

// echo $colors[4];

$hex = [
  'red' => '#ff0000',
  'blue' => '#0000ff',
  'green' => '#00ff00'
];

// echo $hex['red'];
$person = [
  'name' => 'brad',
  'age' => 35,
  'hobbies' => ['golf', 'music'],
  'address' => [
    'street' => '123 main st',
    'city' => 'boston'
  ]
];

$people = [
  ['name' => 'brad', 'age' => 35],
  ['name' => 'jill', 'age' => 25]
];

// echo $person['name'];
// echo $person['hobbies'][1];
// echo $people[1]['name'];
var_dump(json_encode($people));



