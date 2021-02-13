<?php
//comparisons boolean (true or false)
// echo true ;  '1'
// echo false; ''


// comparisons of numbers
// echo 5 < 10;
//echo 5 > 10;
// echo 5 == 10;
//echo 5 != 10;
//echo 5 <= 10;
//cho 5 >= 10;

//comparison of Strings
//echo 'avraham' < 'aq';
//echo 'shaun' > 'Shaun'; '1'
//echo 'mario' == 'mario';

//loose vs strict equal

//echo 5 == '5'; '1'loose comaparion

#The operation === check the value and the data type between two

//echo 5 === '5'; '' strict comparison 

//Break and continue

$products = [
    ['name' => 'poteto', 'price' => 3.0, 'type' => 'organic'],
    ['name' => 'banana skin', 'price' => 2.5, 'type' => 'organic'],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'melon', 'price' => 90, 'type' => 'organic'],
    ['name' => 'lemon', 'price' => 50, 'type' => 'organic'],
    ['name' => 'l', 'price' => 40, 'type' => 'organic']
];

foreach ($products as $product) {
    if ($product['name'] == 'lemon') {
        echo 'There we go';
        break;
    }
    if ($product['name'] > 10) {
        continue;
    }
}
