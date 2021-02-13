<?php

//Functions

$persons = [
    ['name' => 'Avraham', 'age' => 28],
    ['name' => 'Chris', 'age' => 30],
    ['name' => 'Curtis', 'age' => 40],
    ['name' => 'Kim', 'age' => 35]


];

function sayHello($arr)
{
    $formatted = false;
    for ($i = 0; $i < count($arr); $i++) {
        //echo "Good Morning {$arr[$i]['name']} <br>";
        $formatted .= "Good Morning {$arr[$i]['name']} <br>";
    }
    return $formatted;
}

$formatted = sayHello($persons);
echo $formatted;
