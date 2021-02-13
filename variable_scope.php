<?php

// variable scope

#1 local scope
function myFunc()
{
    $price = 10;
    echo $price;
}

//myFunc();

$name = 'Avraham';

//Given error 'undefined variable'
// function sayHello()
// {
//     echo "hello $name"; error
// }

//How to solve it

// function sayHello()
// {
//     global $name;
//     echo "hello $name";
// }

//sayHello();

//Override Global Varible

// function sayHello()
// {
//     global $name;
//     $name =  'Mario';
//     echo "Hello $name";
// }


// sayHello();
// echo $name;

//How to use global variable with out ovveride it 

// function sayHello($name)
// {
//     $name = 'Mario';
//     echo "Hello $name";
// }

// sayHello($name);
// echo $name;
