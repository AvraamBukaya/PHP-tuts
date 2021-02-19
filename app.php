<?php
include 'server.php';

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

//print_r($pizzas);

?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>


<h4 class="center grey-text">Pizzas!</h4>

<div class="container">

    <?php foreach ($pizzas as $pizza) { ?>


        <div class="col s6 m3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6> <?php echo 'Pizza Type:  ' . htmlspecialchars($pizza['title']); ?></h6>
                    <div>
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ingredient) { ?>
                                <li> <?php echo htmlspecialchars($ingredient) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="card-action right-align center">
                    <a class="brand-text" href="#">More Info</a>
                </div>
            </div>
        </div>


    <?php } ?>

    <?php include('templates/footer.php'); ?>

</div>