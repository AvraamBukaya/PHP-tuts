<!-- <?php
        // conditional statements

        // $price = 40;

        // if ($price < 40) {
        //     echo 'conditional met';
        // } else if ($price == 40) {
        //     echo 'elseif conditional met';
        // } else echo 'conditional not met';
        // || or operator 
        // && and operator

        // $products = [
        //     ['name' => 'poteto', 'price' => 3.0, 'type' => 'organic'],
        //     ['name' => 'banana skin', 'price' => 2.5, 'type' => 'organic'],
        //     ['name' => 'lightning bolt', 'price' => 40],
        //     ['name' => 'melon', 'price' => 90, 'type' => 'organic'],
        //     ['name' => 'lemon', 'price' => 50, 'type' => 'organic'],
        //     ['name' => 'l', 'price' => 40, 'type' => 'organic']
        // ];

        // foreach ($products as $product) {
        //     if ($product['price'] < 10 ||  $product['price'] > 2.5) {
        //         echo $product['name'] . '<br>';
        //     } else echo 'The product ' . $product['name'] . ' expenseive' . '<br>';
        // }


        // define('PI', 3.14);
        // echo PI . "\r\n";

        // $name = 'Avraham';
        // $lname = " Bukaya";

        // //echo $stringOne . $stringTwo;
        // //echo 'My name is ' . $stringOne . $stringTwo;
        // //echo "My Name is $stringOne  $stringTwo";
        // //echo strlen($name);
        // // // echo 'Tupac scream \"Thug Life\"';
        // 
        ?> -->


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AB Shop</title>
</head>

<body>
    <h1>Wellcome to AB shop</h1>
    <p>Sale only for the next month</p>
    <?php
    foreach ($products as $product) {
        if ($product['price'] < 10 || $product['type'] == 'organic') { ?>
            <h3><?php echo $product['name'] ?></h3>
            <p>The price is: <?php echo  $product['price'] ?></p>
        <?php } ?>
    <?php } ?>
</body>

</html>