<?php
echo 'hello world<br/>';


$a = 3;
$b = '3';
$c = 5;
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a != $b); // false
var_dump($a !== $b); // true
var_dump($a == $c); // false
var_dump($a <> $c); // true

echo '<br />';
$a = 3;
$b = $a++; // $b is 3, $a is 4
var_dump($a, $b);
$b = ++$a; // $a and $b are 5
var_dump($a, $b);
require 'index.html';
