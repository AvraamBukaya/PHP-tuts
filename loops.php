<?php

for ($i = 0; $i < 5; $i++) {
    echo '<br>' . $i;
}


$blogs = [1, 2, 3, 4, 5, 6];

// for ($j = 0; $j < count($blogs); $j++) {
//     echo '<br>' . $blogs[$j];
// }


//For each loop (in case we dont know the length of array)
// foreach ($blogs as $blog) {
//     echo 'Some template';
// }

//While loop

// $i = 0;
// while ($i < count($blogs)) {
//     echo $blogs[$i] . '<br/>';
//     $i++;
// }

$products = [
    ['name' => 'poteto', 'price' => 3.0],
    ['name' => 'banana skin', 'price' => 2.5],
    ['name' => 'lightning bolt', 'price' => 40]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AB Shop</title>
</head>

<body>
    <h1>Products</h1>
    <ol>
        <?php foreach ($products as $product) { ?>
            <?php
            $product_name = $product['name'];
            $product_price = $product['price']; ?>

            <h3>
                <?php
                echo "The product Name is: $product_name ";
                ?>
            </h3>
            <p><?php echo "The price is: $product_price &#8362 "; ?> </p>




        <?php } ?>


    </ol>

</body>

</html>