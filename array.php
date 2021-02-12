<?php
// Index arrays 

$peopleOne = ['shaun', 'chris'];
// print_r($peopleOne);

$peopleTwo = array(1, "Two", 2, 3, 4);

//Print Array
print_r($peopleTwo);

//How To change element in Array
$peopleTwo[0] = 'One';

//How to add element to given array

//One way
$peopleTwo[] = 20;

//Second way
array_push($peopleTwo, 90);

#print newline
echo "<br>";

print_r($peopleTwo);

//How to get the numbers of the array
echo "<br>" . count($peopleTwo);

//How to merge arrays;

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// Associative array (key & value pairs)
$person = ['name' => 'Avraham', 'age' => 6, 'Address' => "Te'ena 6, Afula"];
//echo $person['name'];
// print_r($person);


$ages = [1, 2, 3];

$ages[] = 90;

//How put out the last element in an given array
// echo "<br>" . array_pop($ages);

// print_r($ages);

//multi-dimensional arrays

$blogs = [
    ['title' => 'Mario Party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheat', 'author' => 'toed', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];
echo "<br>";
print_r($blogs[1]['title']);
