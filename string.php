<?php
//String PHP


//Const Declaration

define('PI', 'test');
// echo PI . "\r\n";

//How to create string

$name = "Avraham ";
// $lname = "Bukaya";

//Concatinte strings 
// echo $name . $lname;

//Emmbeded 

// echo "This is $name";

// echo "2pac Screamed 'Thug Life'";
// echo 'Tupac screamed "Thug Life"';

// String methods

// Get chars in strings
//echo $name[2];

//len
echo strlen($name);

//Uppercase
echo strtoupper($name);

//Lowercase
echo strtolower(PI);
//repalce

echo str_replace('m', '&', $name);
