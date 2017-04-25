<?php
$text = ' How can a clam cram in a clean cream can? ';
echo strlen($text).line(); // 45
$text = trim($text).line();
echo $text; // How can a clam cram in a clean cream can?
line();
echo strtoupper($text); // HOW CAN A CLAM CRAM IN A CLEAN CREAM CAN?
line();
echo strtolower($text); // how can a clam cram in a clean cream can?
line();
$text = str_replace('can', 'could', $text);
echo $text; // How could a clam cram in a clean cream could?
line();
echo substr($text, 2, 6); // w coul
line();
var_dump(strpos($text, 'can')); // false
line();
var_dump(strpos($text, 'could')); // 4
line();

$tmp = ' -tresc wstawiona w string- ';
$text2 = "To jest tekst \n w ciapkach: $tmp";

echo $text2;
line();
