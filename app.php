<!DOCTYPE html>
<html lang="en">
<?php include('server.php') ?>
<?php include('templates/header.php') ?>
<?php include('templates/footer.php') ?>

<?php

$host = 'localhost';
$user_name = 'Avraham';
$password = 'ab1991';
$database_name = 'pizza_app';

$connectionToDatabase = connectToDatabase($host, $user_name, $password, $database_name);

//Write Query for all the pizza

$sqlQuery = 'SELECT title, ingredients, id FROM pizza';

// make query & get result

$result = mysqli_query($connectionToDatabase, $sqlQuery);

// fetch the resulting rows as an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free result from memory
mysqli_free_result($result);

//Close connection to the database
mysqli_close($connectionToDatabase);

print_r($pizzas);


?>



</html>